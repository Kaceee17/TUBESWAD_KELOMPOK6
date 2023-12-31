<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PinjamtayoController;
use App\Http\Controllers\AdmpeminjamanController;
use App\Http\Controllers\instansiController;
use App\Http\Controllers\KendaraanController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
]);

Route::get('/products', [PeminjamanController::class, 'index'])->name('products.index');

Route::get('/products/create', [PeminjamanController::class, 'create'])->name('products.create');
// Perbaiki definisi rute untuk menyimpan data peminjaman dengan method POST
Route::post('/products/store', [PeminjamanController::class, 'store'])->name('products.store');

Route::get('/products/edit/{id}', [AdmpeminjamanController::class, 'edit'])->name('products.edit');
Route::get('/products/edit/close/{id}', [AdmpeminjamanController::class, 'close_edit'])->name('products.closeupdatepeminjaman');
Route::get('/products/edit/approve/{id}', [AdmpeminjamanController::class, 'updateStatusApprove'])->name('products.edit.approve');
Route::get('/products/edit/reject/{id}', [AdmpeminjamanController::class, 'updateStatusReject'])->name('products.edit.reject');

Route::get('/products/destroy-all/{id}', [AdmpeminjamanController::class, 'destroyAll'])->name('products.destroyAll');
// kebawah
Route::get('/manageinstansi', [instansicontroller::class, 'index']) -> name('manageinstansi.index');
Route::get('/manageinstansi/create', [instansicontroller::class,'create']) -> name('manageinstansi.create');
Route::post('(/manageinstansi/store', [InstansiController::class,'store']) -> name('manageinstansi.store');
Route::get('/manageinstansi/{id}/edit', [InstansiController::class, 'edit'])->name('manageinstansi.edit');
Route::delete('/manageinstansi/{id}', [InstansiController::class, 'destroy'])->name('manageinstansi.destroy');
Route::post('/update-data/{id}', [InstansiController::class, 'update'])->name('manageinstansi.update');

Route::resource('kendaraans', KendaraanController::class);