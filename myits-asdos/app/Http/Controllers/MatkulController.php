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
        $is_pertemuan = Pertemuan::where('kelas_id', $id)->first();
        if($is_pertemuan) {
            $pertemuan = Pertemuan::rightJoin('kelas', 'pertemuan.kelas_id', '=', 'kelas.id')
            ->leftJoin('materi', 'pertemuan.id', '=', 'materi.pertemuan_id')
            ->leftJoin('buktifoto', 'pertemuan.id', '=', 'buktifoto.pertemuan_id')
            ->where('kelas.id', $id)
            ->where('kelas.user_id', $user->id)
            ->select('pertemuan.*', 'materi.materi', 'buktifoto.filename')
            ->get();

            return view('matkul', compact('kelas', 'pertemuan'));

        } else {
            $pertemuan = '';
            return view('matkul', compact('kelas', 'pertemuan'));
        }
    }


}
