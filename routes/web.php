<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingController;
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
//No Middleware

Route::get('/', [UserController::class, 'Landing'])
    ->name('landing');
Route::get('/explore/categories', [LandingController::class, 'AllCategories'])
    ->name('explore.category');


//Auth Middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])
        ->name('user.logout');
});

// User Group Middleware
Route::middleware(['roles:user', 'auth'])->group(function () {
    Route::get('/user/explore', [UserController::class, 'UserIndex'])
        ->name('user.index');

    /**Start Qnect Activity**/
    Route::get('/user/qnect/activities', [ActivityController::class, 'AllActivities'])
        ->name('user.qnect.activities');
    Route::get('/user/qnect/activities/create', [ActivityController::class, 'AddActivity'])
        ->name('user.qnect.activities.create');
    Route::get('/user/qnect/activities/{activity}/edit', [ActivityController::class, 'EditActivity'])
        ->name('user.qnect.activities.edit');

    //End-points

    /**Start Qnect Activity**/
    Route::post('/user/qnect/activities', [ActivityController::class, 'StoreActivity'])
        ->name('user.qnect.activities.store');
    Route::put('/user/qnect/activities/{activity}', [ActivityController::class, 'UpdateActivity'])
        ->name('user.qnect.activities.update');
    Route::get('/user/qnect/activities/{activity}', [ActivityController::class, 'DeleteActivity'])
        ->name('user.qnect.activities.destroy');
});

// Admin Group Middleware 
Route::middleware(['roles:admin', 'auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])
        ->name('admin.dashboard');

    /**Start Category**/
    Route::get('/admin/categories', [CategoryController::class, 'AllCategories'])
        ->name('admin.categories');
    Route::get('/admin/categories/create', [CategoryController::class, 'AddCategory'])
        ->name('admin.categories.create');
    Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'EditCategory'])
        ->name('admin.categories.edit');

    //End-points
    Route::post('/admin/categories', [CategoryController::class, 'StoreCategory'])
        ->name('admin.categories.store');
    Route::put('/admin/categories/{category}', [CategoryController::class, 'UpdateCategory'])
        ->name('admin.categories.update');
    Route::get('/admin/categories/{category}', [CategoryController::class, 'DeleteCategory'])
        ->name('admin.categories.destroy');
    /**End Category**/
});


require __DIR__ . '/auth.php';
