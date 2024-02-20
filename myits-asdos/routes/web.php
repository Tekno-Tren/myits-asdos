<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\DataAsdosController;
use App\Http\Controllers\Admin\MateriAdminController;
use App\Http\Controllers\Admin\BuktiAdminController;
use App\Http\Controllers\Admin\RekapNilaiController;
use App\Http\Controllers\Admin\AbsensiController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin.login');
});

// Pertemuan
// End of pertemuan

// admin

Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/dataasdos', [DataAsdosController::class, 'index'])->name('admin.dataasdos');
Route::get('/admin/materi', [MateriAdminController::class, 'index'])->name('admin.materi');
Route::get('/admin/rekapnilai', [RekapNilaiController::class, 'index'])->name('admin.rekapnilai');
Route::get('/admin/bukti', [BuktiAdminController::class, 'index'])->name('admin.bukti');
Route::get('/admin/jadwal', [JadwalController::class, 'index'])->name('admin.jadwal');
Route::post('/admin/jadwal/create/{id}', [JadwalController::class, 'store'])->name('jadwal.store');
Route::get('/admin/absensi', [AbsensiController::class, 'index'])->name('admin.absensi');


// end admin

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // API
    Route::POST('/update-kehadiran', [ApiController::class, 'updateKehadiran'])->name('update.kehadiran');

    // Pertemuan
    Route::get('/pertemuan', [PertemuanController::class, 'index'])->name('pertemuan.index');
    Route::post('/pertemuan/create/{id}', [PertemuanController::class, 'store'])->name('pertemuan.store');

    // End of pertemuan

    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
    Route::post('/materi/create/{id}', [MateriController::class, 'store'])->name('materi.store');

    Route::get('/matkul/{id}', [MatkulController::class, 'index'])->name('matkul.index');

    Route::get('/section1', [SectionController::class, 'index1'])->name('section1.index');
    Route::get('/section2', [SectionController::class, 'index2'])->name('section2.index');
    Route::post('/section/create/{id}', [SectionController::class, 'store'])->name('section.store');


    Route::get('/bukti/{id}', [BuktiController::class, 'index'])->name('bukti.index');
    Route::post('/bukti/create/{id}', [BuktiController::class, 'store'])->name('bukti.store');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // End of profile
});

require __DIR__.'/auth.php';
