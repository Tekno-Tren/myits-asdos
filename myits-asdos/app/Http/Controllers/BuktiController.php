<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bukti;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;

class BuktiController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(Request $request)
    {
        $kelas_id = $request->query('kelas_id');
        $pertemuan_id = $request->query('pertemuan_id');
        $user_id = Auth::user()->id;
        $bukti = Bukti::where('user_id', $user_id)
            ->where('pertemuan_id', $pertemuan_id)
            ->first();
        return view('bukti', compact('user_id', 'kelas_id', 'pertemuan_id', 'bukti'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'upload_berkas' => ['required', 'file', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        try {
            // Cari entitas Bukti berdasarkan pertemuan
            $bukti = Bukti::where('pertemuan_id', $request->pertemuan_id)->first();

            if ($bukti) {
                // Jika bukti sudah ada, perbarui informasinya
                $file = $request->file('upload_berkas');

                // Hapus file lama dari sistem penyimpanan
                Storage::disk('public')->delete($bukti->file_path);

                // Simpan file yang baru di sistem penyimpanan
                $fileName = hash('sha256', time()) . '.' . $file->getClientOriginalExtension();
                $filePath = $file->store('uploads', 'public');

                // Perbarui informasi file di database
                $bukti->filename = $fileName;
                $bukti->file_path = $filePath;
                $bukti->original_name = $file->getClientOriginalName();
                $bukti->save();

                return redirect()
                    ->route('matkul.index', $request->kelas_id)
                    ->with('success', 'Berhasil memperbarui bukti kehadiran');
            } else {
                // Jika bukti belum ada, buat entitas baru
                $file = $request->file('upload_berkas');
                $fileName = hash('sha256', time()) . '.' . $file->getClientOriginalExtension();
                $filePath = $file->store('uploads', 'public');

                // Store file information in the database
                $bukti = new Bukti;
                $bukti->user_id = $request->user_id;
                $bukti->filename = $fileName;
                $bukti->file_path = $filePath;
                $bukti->original_name = $file->getClientOriginalName();
                $bukti->pertemuan_id = $request->pertemuan_id;
                $bukti->save();

                return redirect()
                    ->route('matkul.index', $request->kelas_id)
                    ->with('success', 'Berhasil upload bukti kehadiran');
            }
        } catch (\Exception $e) {
            return redirect()
                ->route('matkul.index', $request->kelas_id)
                ->with('error', 'Gagal upload bukti kehadiran');
        }
    }
}
