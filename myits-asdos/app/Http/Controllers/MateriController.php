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

    public function index(Request $request) {
        $user_id = Auth::id();
        $kelas_id = $request->kelas_id;
        $pertemuan_id = $request->pertemuan_id;
        $materi = Materi::where('kelas_id', $kelas_id)
        ->where('pertemuan_id', $pertemuan_id)
        ->first();
        return view('materi', compact('user_id', 'kelas_id', 'pertemuan_id', 'materi'));
    }

    public function store(Request $request) {
        $request->validate([
            'materi' => ['required'],
        ]);

        try {
            $is_exist = Materi::where('pertemuan_id', $request->pertemuan_id)->first();

            if ($is_exist) {
                $materi = Materi::where('pertemuan_id', $request->pertemuan_id)
                ->update([
                    'materi' => $request->materi,
                    'kelas_id' => $request->kelas_id,
                    'pertemuan_id' => $request->pertemuan_id,
                    'user_id' => $request->user_id,
                ]);

                return redirect()->back()->with('success', 'Berhasil mengubah materi');

            } else {
                $materi = Materi::create([
                    'kelas_id' => $request->kelas_id,
                    'pertemuan_id' => $request->pertemuan_id,
                    'materi' => $request->materi,
                    'user_id' => $request->user_id,
                ]);
                return redirect()->back()->with('success', 'Berhasil menambahkan materi');
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menambahkan materi');
        }

    }
}
