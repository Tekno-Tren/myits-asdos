<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\DashboardController;

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

    // Pertemuan
    Route::get('/pertemuan', [PertemuanController::class, 'index'])->name('pertemuan.index');
    // End of pertemuan

    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

    Route::get('/matkul/{id}', [MatkulController::class, 'index'])->name('matkul.index');

    Route::get('/section', [SectionController::class, 'index'])->name('section.index');

    Route::get('/bukti', [BuktiController::class, 'index'])->name('bukti.index');



    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // End of profile

});

require __DIR__.'/auth.php';
