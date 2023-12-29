<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AdmpeminjamanController;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

});


Route::get('/', function () {
    return view('home');
});

Route::get('/peminjam', [PeminjamanController::class, 'index'])->name('peminjam.indexpeminjaman');

Route::get('/peminjam/create', [PeminjamanController::class, 'create'])->name('peminjam.createpeminjaman');
// Perbaiki definisi rute untuk menyimpan data peminjaman dengan method POST
Route::post('/peminjam/store', [PeminjamanController::class, 'store'])->name('peminjam.store');

Route::get('/peminjam/updatepeminjaman/{id}', [AdmpeminjamanController::class, 'edit'])->name('peminjam.updatepeminjaman');
Route::get('/peminjam/updatepeminjaman/close/{id}', [AdmpeminjamanController::class, 'close_edit'])->name('peminjam.closeupdatepeminjaman');
Route::get('/peminjam/update/approve/{id}', [AdmpeminjamanController::class, 'updateStatusApprove'])->name('peminjaman.update.approve');
Route::get('/peminjam/update/reject/{id}', [AdmpeminjamanController::class, 'updateStatusReject'])->name('peminjaman.update.reject');

Route::get('/peminjam/destroy-all/{id}', [AdmpeminjamanController::class, 'destroyAll'])->name('peminjaman.destroyAll');



require __DIR__.'/auth.php';
