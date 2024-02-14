<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bukti;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;

class BuktiController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index($kelas_id) {
        $user_id = Auth::id();
        // dd($kelas_id);
        return view('bukti', compact('user_id', 'kelas_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bukti' => ['required', 'mimes:pdf,jpg,png', 'max:2048'],
        ]);

        $file = $request->file('bukti');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads', 'public');

        // Store file information in the database
        $uploadedFile = new Bukti();
        $uploadedFile->filename = $fileName;
        $uploadedFile->original_name = $file->getClientOriginalName();
        $uploadedFile->file_path = $filePath;
        $uploadedFile->user_id = $request->user_id;
        $uploadedFile->kelas_id = $request->kelas_id;
        $uploadedFile->save();

        return redirect()
            ->route('matkul.index', $request->kelas_id)
            ->with('success', 'Berhasil mendaftar');
    }
}
