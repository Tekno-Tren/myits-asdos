<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;


class TambahKelasController extends BaseController
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
            $kelas = Kelas::all();
            return view('admin.tambahkelas', compact('asdos', 'kelas'));
        }
        return view('admin.tambahkelas', compact('asdos'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => ['required'],
                'nama_dosen' => ['required', 'string'],
                'semester' => ['required', 'string'],
                'tahun' => ['required'],
            ]);
            $kelas = Kelas::create([
                'nama' => $request->nama,
                'nama_dosen' => $request->nama_dosen,
                'semester' => $request->semester,
                'tahun' => $request->tahun,
            ]);
            return redirect()->back()->with('success', 'Kelas berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Kelas gagal ditambahkan');
        }
    }

    public function show(Request $request)
    {
        $asdos = User::where('departemen', '!=', '000')->get();
        $kelas = Kelas::where('id', $request->query('kelas_id'))->first();
        return view('admin.tambahkelas', compact('asdos', 'kelas'));
    }

    public function update(Request $request)
    {

        try {
            $request->validate([
                'user_id' => ['required'],
                'kelas_id' => ['required'],
                'nama' => ['required'],
                'nama_dosen' => ['required', 'string'],
                'semester' => ['required', 'string'],
                'tahun' => ['required'],
            ]);
            $kelas = Kelas::where('id', $request->kelas_id)
                ->update([
                    'user_id' => $request->user_id,
                    'nama' => $request->nama,
                    'nama_dosen' => $request->nama_dosen,
                    'semester' => $request->semester,
                    'tahun' => $request->tahun,
                ]);
            return redirect()->back()->with('success', 'Kelas berhasil di update');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Kelas gagal ditambahkan');
        }
    }

    public function destroy(Request $request, $id) {

        Kelas::where('id', $id)
        ->delete();

        return redirect()->back()->with('success', 'Kelas telah terhapus');
    }
}
