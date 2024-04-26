<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegistrasiController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        try {

            $is_user = User::where('username', $request->username)->first();
            if ($is_user) {
                return redirect()->back()->with('error', 'Username sudah terdaftar');
            }

            $user = User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));

            return redirect()
            ->route('login')
            ->with('success', 'Berhasil mendaftar');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Username atau NIK sudah terdaftar');
        }
    }
}
