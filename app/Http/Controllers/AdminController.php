<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
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
        
        return view('admin.login');
    }

    public function check_login(Request $request)
    {
        $rules=[
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ];
        
        $request->validate($rules);
        
        $data = $request->only('email','password');

        // if(Auth::attempt($data))
        // {
        //     return redirect()->route('admin.dashboard')->with('success', 'Welcome, Admin!');
            
        // }
        // return redirect()->back()->with('error', 'Invalid credentials!');
        if (Auth::attempt($data)) {
            session()->forget('error'); // Xóa thông báo lỗi trước đó
            if (Auth::user()->role === 'customer') {
                return redirect()->route('showHomePage')->with('success', 'Welcome to our shop!');
            }
                return redirect()->route('admin.dashboard')->with('success', 'Welcome, Admin!');
        }
        return redirect()->back()->with('error', 'Invalid credentials!');
    }

    public function register()
    {
        
        return view('admin.register', ['formType' => 'register']);
    }

    public function check_register(Request $request)
    {
        $rules=[
            'name' => 'required|string|min:2|max:60',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'password_confirm' => 'required|same:password',
        ];
        
        $request->validate($rules);

        $data = $request->only('name','email');
        $pass_hash = bcrypt($request->password);
        $data['password'] = $pass_hash;

        if(User::create($data)) {
            return redirect()->route('admin.login')->with('success', 'Registration successful!');
        }
        return redirect()->back()->with('error', 'Registration fail!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('admin.login');
    }
}