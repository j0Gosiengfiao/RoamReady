<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

/**Route::get('/', function () {
    return view('welcome');
})->name('landing');**/

Route::get('/', [UserController::class, 'Landing'])->name('landing');

/**Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');**/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User Group Middleware
Route::middleware(['roles:user', 'auth'])->group(function () {
    Route::get('/user/explore', [UserController::class, 'UserIndex'])
    ->name('user.index');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])
    ->name('user.logout');
});

// Admin Group Middleware 

Route::middleware(['roles:admin', 'auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
    ->name('admin.dashboard');
});


require __DIR__ . '/auth.php';
