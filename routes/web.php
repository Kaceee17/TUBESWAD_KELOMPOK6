<?php

use App\Http\Controllers\instansicontroller;
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
    return view('welcome');
});

Route::get('/manageinstansi', [instansicontroller::class, 'index']) -> name('manageinstansi.index');
Route::get('/manageinstansi/create', [instansicontroller::class,'create']) -> name('manageinstansi.create');
Route::post('(/manageinstnasi/store', [InstansiController::class,'store']) -> name('manageinstansi.store');
Route::get('/manageinstansi/{id}', [InstansiController::class, 'show'])->name('manageinstansi.show');
Route::get('/manageinstansi/{id}/edit', [InstansiController::class, 'edit'])->name('manageinstansi.edit');
Route::delete('/manageinstansi/{id}', [InstansiController::class, 'destroy'])->name('manageinstansi.destroy');

