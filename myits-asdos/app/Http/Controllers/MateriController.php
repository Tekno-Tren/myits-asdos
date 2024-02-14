<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Materi;

class MateriController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index($kelas_id) {
        $user_id = Auth::id();
        // dd($kelas_id);
        return view('materi', compact('user_id', 'kelas_id'));
    }

    public function store(Request $request) {
        $request->validate([
            'materi' => ['required', 'string', 'max:1000'],
        ]);

        $materi = Materi::create([
            'materi' => $request->materi,
            'user_id' => $request->user_id,
            'kelas_id' => $request->kelas_id
        ]);

        if ($materi) {
            return redirect()
            ->route('matkul.index', $request->kelas_id)
            ->with('success', 'Berhasil mendaftar');
        }
    }
//     public function store(Request $request)
//     {
//         $request->validate([
//             'nama' => ['required', 'string', 'max:255'],
//             'username' => ['required', 'string'],
//             'departemen' => ['required', 'string'],
//             'telp' => ['required', 'string'],
//             'bank' => ['required', 'string'],
//             'norek' => ['required', 'string'],
//             'nik' => ['required', 'string', 'max:16'],
//             'alamat' => ['required', 'string'],
//             'password' => ['required'],
//         ]);

//         try {

//             $is_user = Kelas::where('username', $request->username)->first();
//             if ($is_user) {
//                 return redirect()->back()->with('error', 'Username sudah terdaftar');
//             }

//             $user = User::create([
//                 'nama' => $request->nama,
//                 'username' => $request->username,
//                 'departemen' => $request->departemen,
//                 'telp' => $request->telp,
//                 'bank' => $request->bank,
//                 'norek' => $request->norek,
//                 'nik' => $request->nik,
//                 'alamat' => $request->alamat,
//                 'password' => Hash::make($request->password),
//             ]);

//             event(new Registered($user));

//             return redirect()
//             ->route('login')
//             ->with('success', 'Berhasil mendaftar');

//         } catch (\Exception $e) {
//             return redirect()->back()->with('error', 'Username atau NIK sudah terdaftar');
//         }
//     }
}
