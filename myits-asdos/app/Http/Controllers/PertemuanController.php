<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pertemuan;
use App\Models\Kelas;

class PertemuanController extends BaseController
{
    /**
     * Display the registration view.
     */
    public function index( Request $request) {
        $user = Auth::user();
        $kelas_id = $request->query('matkul');
        return view('pertemuan', compact('kelas_id'));
    }

    public function store(Request $request) {

        try {
            $request->validate([
                'tanggal' => ['required', 'date'],
                'jam' => ['required'],
                'tempat' => ['required', 'string'],
            ]);


            $pertemuan = Pertemuan::create([
                'tanggal' => $request->tanggal,
                'jam' => $request->jam,
                'tempat' => $request->tempat,
                'status_kehadiran' => 0,
                'kelas_id' => $request->kelas_id

            ]);


            return redirect(route('matkul.index',$request->kelas_id))->with('success', 'Pertemuan berhasil ditambahkan');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Pertemuan gagal ditambahkan'. $e);
        }
    }

    public function update(Request $request) {
        try {
            $request->validate([
                'tanggal' => ['required', 'date'],
                'jam' => ['required'],
                'tempat' => ['required', 'string'],
            ]);

            $pertemuan = Pertemuan::find($request->id_pertemuan);

            $pertemuan->tanggal = $request->tanggal;
            $pertemuan->jam = $request->jam;
            $pertemuan->tempat = $request->tempat;
            $pertemuan->save();

            return redirect(route('matkul.index',$request->kelas_id))->with('success', 'Pertemuan berhasil diubah');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Pertemuan gagal diubah');
        }
    }


}
