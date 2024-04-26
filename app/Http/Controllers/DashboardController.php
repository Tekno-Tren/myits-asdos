<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;

class DashboardController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        // Mengambil ID user saat ini yang sedang login
        $userId = Auth::id();

        // Mengambil data kelas berdasarkan user_id
        $kelas = Kelas::where('user_id', $userId)->get();
        //dd($kelas);
        // Menampilkan view dashboard dan mengirim data kelas ke dalam view
        return view('dashboard', compact('kelas'));
    }


}
