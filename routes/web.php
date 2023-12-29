<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willssss
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/peminjam', [PeminjamanController::class, 'index'])->name('admin.peminjaman');

// Route::get('/peminjam/create', [PeminjamanController::class, 'create'])->name('peminjam.createpeminjaman');

// Route::get('/peminjam/store', [PeminjamanController::class, 'store'])->name('peminjam.store');

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PinjamtayoController;
use App\Http\Controllers\AdmpeminjamanController;
use App\Http\Controllers\pinjambusController;

Route::get('/', function () {
    return view('home');
});

Route::get('/peminjam', [PinjamtayoController::class, 'index'])->name('peminjam.index');

Route::get('/peminjam/create', [PinjamtayoController::class, 'create'])->name('peminjam.createpeminjaman');
Route::get('/peminjam/create/pembayaran', [pinjambusController::class, 'create'])->name('pembayaran.createpemabayaran');
// Perbaiki definisi rute untuk menyimpan data peminjaman dengan method POST
Route::post('/peminjam/store', [PinjamtayoController::class, 'store'])->name('peminjam.store');

Route::get('/peminjam/updatepeminjaman/{id}', [AdmpeminjamanController::class, 'edit'])->name('peminjam.updatepeminjaman');
Route::get('/peminjam/updatepeminjaman/close/{id}', [AdmpeminjamanController::class, 'close_edit'])->name('peminjam.closeupdatepeminjaman');
Route::get('/peminjam/update/approve/{id}', [AdmpeminjamanController::class, 'updateStatusApprove'])->name('peminjaman.update.approve');
Route::get('/peminjam/update/reject/{id}', [AdmpeminjamanController::class, 'updateStatusReject'])->name('peminjaman.update.reject');

Route::get('/peminjam/destroy-all/{id}', [AdmpeminjamanController::class, 'destroyAll'])->name('peminjaman.destroyAll');