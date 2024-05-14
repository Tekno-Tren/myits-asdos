<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $is_user = User::where('username', $request->username)->first();
        if($is_user) {
            if($is_user->departemen == '000') {
                $request->authenticate();

                $request->session()->regenerate();

                return redirect(RouteServiceProvider::HOME_ADMIN);

            } else if ($is_user->departemen == '111'){

                return redirect()->back()->with('error', 'Anda tidak memiliki akses');

            } else {
                $request->authenticate();

                $request->session()->regenerate();

                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak terdaftar');
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }
}
