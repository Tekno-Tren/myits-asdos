<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApiController;

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

// Pertemuan
// End of pertemuan

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
