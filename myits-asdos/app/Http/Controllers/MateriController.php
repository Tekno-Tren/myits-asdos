<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MateriController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store(index $index)
    {
        // Validasi data yang dikirimkan
        $validatedData = $index->validate([
            'materi' => 'required|string',
        ]);

        // Simpan data ke database
        $index->materi = $validatedData['materi'];
        $index->save();

        // Redirect atau kembali ke halaman sebelumnya setelah penyimpanan berhasil
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}


