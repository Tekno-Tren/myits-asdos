<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Kelas;
use Illuminate\Support\Facades\Auth;
use App\Models\Pertemuan;


class MatkulController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index($id) {
        $kelas = Kelas::findOrFail( $id );
        $user = Auth::user();
        $pertemuan = Pertemuan::rightJoin('kelas', 'pertemuan.kelas_id', '=', 'kelas.id')
            ->where('kelas.id', $id)
            ->where('kelas.user_id', $user->id)
            ->select('pertemuan.*')
            ->get();

        return view('matkul', compact('kelas', 'pertemuan'));
    }
    // public function index() {
    //     $user_id = Auth::id();
    //     $kelas_id = Kelas::where('user_id', $user_id)->first()->id;
    //     $tugas_list = Section::where('user_id', $user_id)->where('kelas_id', $kelas_id)->get();
    //     return view('section', compact('user_id', 'kelas_id', 'tugas_list'));
    // }
}
