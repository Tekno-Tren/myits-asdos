<?php

namespace App\Http\Controllers\Auth;

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

class RegisteredUserController extends Controller
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string'],
            'departemen' => ['required', 'string'],
            'telp' => ['required', 'string'],
            'bank' => ['required', 'string'],
            'norek' => ['required', 'string'],
            'nik' => ['required', 'string', 'max:16'],
            'alamat' => ['required', 'string'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'departemen' => $request->departemen,
            'telp' => $request->telp,
            'bank' => $request->bank,
            'norek' => $request->norek,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
