<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\UserController;

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

    // Route::get('/admin', [UserController::class, 'index'])->name('admin.index');


    // Route::get('/user', [UserController::class, 'tabel'])->name('user.tabel');
    // Route::get('/user/daftar', [UserController::class, 'daftar'])->name('user.daftar');
    // Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
});

// Route::get('/admin', 'AdminController@index')->name('admin.index');
// Route::get('/admin/create', 'AdminController@create')->name('admin.create');


// Route::get('/showroom', \App\Http\Controllers\ShowroomController::class);
// Route::get('/showroom/create', \App\Http\Controllers\ShowroomController::class);
// Route::get('/showroom/store', \App\Http\Controllers\ShowroomController::class);




require __DIR__.'/auth.php';
