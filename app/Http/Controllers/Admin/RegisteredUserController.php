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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('admin.registrasi');
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
            'departemen' => ['required', 'string'],
            'telp' => ['required', 'string'],
            'bank' => ['required', 'string'],
            'norek' => ['required', 'string'],
            'nik' => ['required', 'string', 'max:16'],
            'alamat' => ['required', 'string']
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
                'departemen' => $request->departemen,
                'telp' => $request->telp,
                'bank' => $request->bank,
                'norek' => $request->norek,
                'nik' => $request->nik,
                'alamat' => $request->alamat
            ]);

            event(new Registered($user));

            return redirect()
            ->route('login-admin')
            ->with('success', 'Berhasil mendaftar');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function adminStore(Request $request)
    {

        try {
            $request->validate([
                'nama' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:16'],
                'password' => ['required'],
                'confirm_password' => ['required', 'same:password'],
            ]);

            $is_user = User::where('username', $request->username)->first();

            if ($is_user) {
                return redirect()->back()->with('error', 'Username sudah terdaftar');
            }

            $user = User::create([
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'departemen' => '111',
                'telp' => '000',
                'bank' => '000',
                'norek' => '000',
                'nik' => '000',
                'alamat' => '000'
            ]);

            event(new Registered($user));

            return redirect()
            ->route('login-admin')
            ->with('success', 'Berhasil mendaftar');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
