<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//require __DIR__.'/admin-auth.php';


Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);

Route::get('user/login', [UserController::class, 'showLoginForm'])->name('user.login');
Route::post('user/login', [UserController::class, 'login']);

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});