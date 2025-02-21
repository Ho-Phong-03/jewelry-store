<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        // Không cần middleware ở đây nữa vì đã xử lý ở routes
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Kiểm tra nếu người dùng đã đăng nhập
        if (Auth::check()) {
            // Chuyển hướng đến route admin.dashboard
            return view('admin.dashboard');
        }

        // Nếu chưa đăng nhập, hiển thị trang đăng nhập
        return redirect()->route('admin.login');
    }

    public function login()
    {
        // Kiểm tra nếu đã đăng nhập thì chuyển hướng
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('admin.login');
    }

    public function check_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->route('home')
                ->with('success', 'Đăng nhập thành công!');
        }

        // Đăng nhập thất bại
        return redirect()->back()
            ->with('error', 'Email hoặc mật khẩu không chính xác!')
            ->withInput($request->except('password'));
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('admin.register');
    }

    public function check_register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            'password_confirmation.required' => 'Vui lòng xác nhận mật khẩu'
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'customer' // Mặc định là customer
            ]);

            // Đăng nhập ngay sau khi đăng ký
            Auth::login($user);

            return redirect()->route('home')
                ->with('success', 'Đăng ký thành công!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Đăng ký thất bại! Vui lòng thử lại.')
                ->withInput($request->except('password', 'password_confirmation'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return redirect()->route('home')
            ->with('success', 'Đăng xuất thành công!');
    }

    public function forgotPassword()
    {
        return view('admin.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword($token)
    {
        return view('admin.reset-password', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('admin.login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
