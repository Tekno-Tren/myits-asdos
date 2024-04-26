<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;


class JadwalController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $asdos = User::where('departemen', '!=', '000')->get();
        $this_year = date('Y');
        $this_month = date('m');
        $months = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

        // Mendapatkan nilai is_semester berdasarkan bulan saat ini
        if ($this_month >= 2 && $this_month <= 6) {
            $is_semester = 'genap';
        } elseif ($this_month >= 8 && $this_month <= 12) {
            $is_semester = 'ganjil';
        }

        // Melanjutkan dengan kode untuk mengambil data kelas berdasarkan semester
        if ($is_semester) {
            $kelas = Kelas::where('tahun', $this_year)
                ->where('semester', $is_semester)
                ->where('user_id', "!=", null)
                ->get();
            $kelas_plotting = Kelas::where('tahun', $this_year)
                ->where('semester', $is_semester)
                ->where('user_id', null)
                ->get();
            return view('admin.jadwal', compact('asdos', 'kelas', 'kelas_plotting'));
        }
        return view('admin.jadwal', compact('asdos'));
    }
    public function store(Request $request)
    {
        try {
            $kelas = Kelas::where('id', $request->kelas_id)
            ->update([
                'user_id' => $request->user_id,
            ]);
            return redirect()->back()->with('success', 'Kelas berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Pertemuan gagal ditambahkan');
        }
    }

    public function show(Request $request, $id)
    {
        $asdos = User::where('departemen', '!=', '000')->get();
        $kelas = Kelas::where('id', $id)->first();
        return view('admin.jadwaledit', compact('asdos', 'kelas'));
    }

    public function update(Request $request, $id)
    {

        try {
            $kelas = Kelas::where('id', $id)
                ->update([
                    'user_id' => $request->user_id
                ]);
            return redirect()->route('admin.jadwal')->with('success', 'Kelas berhasil di update');
        } catch (\Exception $e) {
            return redirect()->route('admin.jadwal')->with('error', 'Pertemuan gagal ditambahkan');
        }
    }

    public function destroy(Request $request) {

        Kelas::where('id', $request->kelas_id)
        ->delete();

        return redirect()->back()->with('success', 'Kelas telah terhapus');
    }
}
