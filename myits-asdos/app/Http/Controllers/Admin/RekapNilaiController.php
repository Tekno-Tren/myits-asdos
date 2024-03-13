<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;
use App\Models\Section;
use Illuminate\Http\Request;


class RekapNilaiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $nilai1 = Section::where('rekap_nilai', '1')->get();
        $nilai2 = Section::where('rekap_nilai', '2')->get();

        return view('admin.rekapnilai', compact('nilai1', 'nilai2'));
    }


    public function destroy(Request $request) {

        Section::where('id', $request->kelas_id)
        ->delete();

        return redirect()->back()->with('success', 'File telah terhapus');
    }
}
