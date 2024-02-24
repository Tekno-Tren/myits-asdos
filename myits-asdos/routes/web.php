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
use App\Http\Controllers\Admin\JadwalEditController;
use App\Http\Controllers\Admin\TambahKelasController;
use App\Http\Controllers\Admin\KelasEditController;
use App\Http\Controllers\Admin\MateriAdminController;
use App\Http\Controllers\Admin\BuktiAdminController;
use App\Http\Controllers\Admin\RekapNilaiController;
use App\Http\Controllers\Admin\RekapAbsenController;
use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\DetailController;

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

    // admin

    Route::get('/admin/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/materi', [MateriAdminController::class, 'index'])->name('admin.materi');
    Route::get('/admin/rekapnilai', [RekapNilaiController::class, 'index'])->name('admin.rekapnilai');
    Route::delete('/admin/rekapnilai/destroy/{id}', [RekapNilaiController::class, 'destroy'])->name('admin.rekapnilai.destroy');
    Route::get('/admin/rekapabsen', [RekapAbsenController::class, 'index'])->name('admin.rekapabsen');
    Route::delete('/admin/rekapabsen/destroy/{id}', [RekapAbsenController::class, 'destroy'])->name('admin.rekapabsen.destroy');
    Route::get('/admin/bukti', [BuktiAdminController::class, 'index'])->name('admin.bukti');
    Route::get('/admin/jadwal', [JadwalController::class, 'index'])->name('admin.jadwal');
    Route::get('/admin/jadwaledit/{id}', [JadwalController::class, 'show'])->name('admin.jadwaledit');
    Route::post('/admin/jadwal/show/{id}', [JadwalController::class, 'update'])->name('admin.jadwaledit.update');
    Route::post('/admin/jadwal/create', [JadwalController::class, 'store'])->name('admin.jadwal.store');
    Route::delete('/admin/jadwal/destroy/{id}', [JadwalController::class, 'destroy'])->name('admin.jadwal.destroy');
    Route::get('/admin/absensi', [AbsensiController::class, 'index'])->name('admin.absensi');
    Route::get('/admin/tambahkelas', [TambahKelasController::class, 'index'])->name('admin.tambahkelas');
    Route::get('/admin/kelasedit', [TambahKelasController::class, 'show'])->name('admin.kelasedit');
    Route::post('/admin/tambahkelas/show', [TambahKelasController::class, 'update'])->name('admin.kelasedit.update');
    Route::post('/admin/tambahkelas/create', [TambahKelasController::class, 'store'])->name('tambahkelas.store');
    Route::delete('/admin/tambahkelas/destroy/{id}', [TambahKelasController::class, 'destroy'])->name('admin.tambahkelas.destroy');
    Route::get('/admin/detail', [DetailController::class, 'index'])->name('admin.detail');

});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
