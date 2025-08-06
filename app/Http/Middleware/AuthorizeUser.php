<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoles = [1]; // ID Role: Admin

        if (!Auth::check()) {
            return redirect('login')->withErrors(['msg' => 'Silakan login terlebih dahulu']);
        }

        $userRole = Auth::user()->role_id;

        if (in_array($userRole, $allowedRoles)) {
            return $next($request);
        }

        return response()->view('403', [], 403);
    }
}
