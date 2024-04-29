<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pertemuan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;
use App\Models\Section;
use Illuminate\Http\Request;


class RekapAbsenController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $kelas = Kelas::all();

        return view('admin.rekapabsen', compact('kelas'));
    }


    public function destroy(Request $request) {

        Section::where('id', $request->kelas_id)
        ->delete();

        return redirect()->back()->with('success', 'File telah terhapus');
    }

    public function show($id) {
        $kelas = Kelas::findOrFail( $id );
        $user = Auth::user();
        $is_pertemuan = Pertemuan::where('kelas_id', $id)->first();
        if($is_pertemuan) {
            $pertemuan = Pertemuan::rightJoin('kelas', 'pertemuan.kelas_id', '=', 'kelas.id')
            ->leftJoin('materi', 'pertemuan.id', '=', 'materi.pertemuan_id')
            ->leftJoin('buktifoto', 'pertemuan.id', '=', 'buktifoto.pertemuan_id')
            ->where('kelas.id', $id)
            // ->where('kelas.user_id', $user->id)
            ->select('pertemuan.*', 'materi.materi', 'buktifoto.filename')
            ->get();

            return view('matkul', compact('kelas', 'pertemuan'));

        } else {
            $pertemuan = '';
            return view('matkul', compact('kelas', 'pertemuan'));
        }
    }
}
