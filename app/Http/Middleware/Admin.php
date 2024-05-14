<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Admin extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        $user = Auth::user();
        if ($user && $user->departemen == '000') {
            return $next($request);
        } else if ($user->departemen == '111') {
            Auth::logout()->with('error', 'Anda tidak memiliki akses');
        } else {
            return redirect('/dashboard');
        }
        return $request->expectsJson() ? null : route('login');
    }
}
