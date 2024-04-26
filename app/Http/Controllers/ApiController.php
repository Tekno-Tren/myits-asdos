<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pertemuan;
use App\Models\Kelas;

class ApiController extends Controller
{
    public function updateKehadiran(Request $request)
    {
        $pertemuan = Pertemuan::find($request->id_pertemuan);
        $pertemuan->status_kehadiran = $request->status;
        $pertemuan->save();
        return response()->json(['message' => 'Kehadiran berhasil diupdate']);
    }
}
