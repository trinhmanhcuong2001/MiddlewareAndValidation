<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (Auth::check()) {
            // dd(Auth::user()->getRawOriginal(key: 'role'));
            if (in_array(Auth::user()->getRawOriginal('role'), $roles)) {
                return $next($request);
            }
            session()->flash('error', 'Bạn không có đủ quyền');
            return redirect()->route('home');
        }
        session()->flash('error', 'Vui lòng đăng nhập');
        return redirect()->route('login');
    }
}
