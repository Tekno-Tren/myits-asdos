<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Section;
use App\Models\Kelas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;

class SectionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function index1() {
        $user_id = Auth::id();
        try {
            $kelas_id = Kelas::where('user_id', $user_id)->first()->id;
            $tugas_list = Section::where('user_id', $user_id)->where('kelas_id', $kelas_id)->where('rekap_nilai', 1)->get();
            return view('section1', compact('user_id', 'kelas_id', 'tugas_list'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Kamu belum terdaftar di kelas manapun');
        }
    }

    public function index2() {
        $user_id = Auth::id();
        try {
            $kelas_id = Kelas::where('user_id', $user_id)->first()->id;
            $tugas_list = Section::where('user_id', $user_id)->where('kelas_id', $kelas_id)->where('rekap_nilai', 2)->get();
            return view('section2', compact('user_id', 'kelas_id', 'tugas_list'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Kamu belum terdaftar di kelas manapun');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'upload_berkas' => ['required', 'mimes:pdf', 'max:2000'],
                'user_id' => ['required'],
                'kelas_id' => ['required'],
                'rekap_nilai' => ['required']
            ]);

            $file = $request->file('upload_berkas');
            $fileName = $file->getClientOriginalName();
            $check_file = Section::where('user_id', $request->user_id)->where('kelas_id', $request->kelas_id)->where('original_name', $fileName)->first();

            if($check_file) {

                $filePath = $file->storeAs('uploads', $fileName, 'public');
                $check_file->update([
                    'file_path' => $filePath,
                ]);

                return redirect()->back()->with('success', 'Berkas berhasil update');
            } else {
                $filePath = $file->storeAs('uploads', $fileName, 'public');
                $uploadedFile = new Section();
                $uploadedFile->fileName = $fileName;
                $uploadedFile->original_name = $file->getClientOriginalName();
                $uploadedFile->file_path = $filePath;
                $uploadedFile->user_id = $request->user_id;
                $uploadedFile->kelas_id = $request->kelas_id;
                $uploadedFile->rekap_nilai = $request->rekap_nilai;
                $uploadedFile->save();

                return redirect()->back()->with('success', 'Berkas berhasil diupload');

            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Berkas gagal diupload');
        }

        // try {
        //     $file = $request->file('berkas_tugas');
        //     $fileName = $file->getClientOriginalName();
        //     $filePath = $file->store('uploads', 'public');

        //     // Store file information in the database
        //     $uploadedFile = new Section();
        //     $uploadedFile->filename = $fileName;
        //     $uploadedFile->original_name = $file->getClientOriginalName();
        //     $uploadedFile->file_path = $filePath;
        //     $uploadedFile->user_id = $request->user_id;
        //     $uploadedFile->kelas_id = $request->kelas_id;
        //     dd($uploadedFile);
        //     $uploadedFile->save();

        //     return redirect()
        //     ->route('dashboard.index', $request->kelas_id)
        //     ->with('success', 'Berhasil mendaftar');
        // } catch (\Exception $e) {
        //     return redirect()
        //         ->route('dashboard.index', $request->kelas_id)
        //         ->with('error', 'Gagal mendaftar' . $e->getMessage());
        // }
    }
}

