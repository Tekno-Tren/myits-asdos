<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Kelas;

class MatkulController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index($id) {
        $matkul = Kelas::findOrFail($id);
        return view('matkul', compact('matkul'));
    }
}
