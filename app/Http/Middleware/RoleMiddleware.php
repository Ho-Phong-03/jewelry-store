<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!Auth::check()) {
            return redirect('login'); // Chuyển hướng nếu chưa đăng nhập
        }

        // Kiểm tra vai trò của người dùng
        if (Auth::user()->role !== $role) { // Thay `role` bằng cột vai trò trong bảng users
            abort(403, 'Unauthorized action.'); // Trả về lỗi 403 nếu không có quyền
        }

        return $next($request);
    }
    
}
