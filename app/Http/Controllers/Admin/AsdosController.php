<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\User;
use Illuminate\Http\Request;

class AsdosController {
    public function index() {

        $asdos = User::whereNotIn('departemen', ['111', '000'])->get();
        return view('admin.asdos', compact('asdos'));
    }

    public function aktivate(Request $request, $id) {
        $admin = User::find($id);
        $admin->departemen = '000';
        $admin->save();

        return redirect()->back()->with('success', 'Admin berhasil diaktifkan');
    }

    public function deaktivate(Request $request, $id) {
        $admin = User::find($id);
        $admin->departemen = '111';
        $admin->save();

        return redirect()->back()->with('success', 'Admin berhasil dinonaktifkan');
    }

    public function delete(Request $request) {
        $admin = User::where('id', $request->id)->first();
        $admin->delete();

        return redirect()->back()->with('success', 'Admin berhasil dihapus');
    }
}
