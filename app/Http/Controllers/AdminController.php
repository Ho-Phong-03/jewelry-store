<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        // Check if user is already logged in
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function check_login(Request $request)
    {
        $rules = [
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ];
        
        $request->validate($rules);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Welcome, Admin!');
            }
            
            Auth::logout();
            return redirect()->back()
                ->with('error', 'You do not have permission to access admin panel.');
        }
        return redirect()->back()->with('error', 'Invalid credentials!');
    }
    public function check_register(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:60',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirm' => 'required|same:password',
        ];
        
        $request->validate($rules);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'customer' // Mặc định là customer
            ]);

            return redirect()->route('admin.login')
                ->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Registration failed! Please try again.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
