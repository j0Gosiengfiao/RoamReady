<?php

use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestoController;
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
Route::get('/explore/categories/category={category}', [LandingController::class, 'SelectCategories'])
    ->name('explore.category.select');
Route::get('/explore/activities', [LandingController::class, 'AllActivities'])
    ->name('explore.activity');
Route::get('/explore/activities/activity={activity}', [LandingController::class, 'ShowActivity'])
    ->name('explore.activity.show');


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
    /**End Qnect Activity**/

    /**Start Qnect Accommodations**/
    Route::get('/user/qnect/accommodations', [AccommodationController::class, 'AllAccommodations'])
        ->name('user.qnect.accommodations');
    Route::get('/user/qnect/accommodations/create', [AccommodationController::class, 'AddAccommodation'])
        ->name('user.qnect.accommodations.create');
    Route::get('/user/qnect/accommodations/{accommodation}/edit', [AccommodationController::class, 'EditAccommodation'])
        ->name('user.qnect.accommodations.edit');
    /**Start Qnect Accommodations**/

    /**Start Qnect Restaurants**/
    Route::get('/user/qnect/restaurants', [RestoController::class, 'AllRestaurants'])
        ->name('user.qnect.restaurants');
    Route::get('/user/qnect/restaurants/create', [RestoController::class, 'AddRestaurant'])
        ->name('user.qnect.restaurants.create');
    Route::get('/user/qnect/restaurants/{resto}/edit', [RestoController::class, 'EditRestaurant'])
        ->name('user.qnect.restaurants.edit');
    /**Start Qnect Restaurants**/

    /**Start Itinerary**/
    Route::get('/user/itineraries', [ItineraryController::class, 'AllItineraries'])
        ->name('user.itineraries');
    Route::get('/user/itineraries/create', [ItineraryController::class, 'AddItinerary'])
        ->name('user.itineraries.create');
    Route::get('/user/itineraries/itinerary={itinerary}/day={day}/show', [ItineraryController::class, 'ShowItinerary'])
        ->name('user.itineraries.show');
    /**Start Itinerary**/

    //End-points

    /**Start Qnect Activity**/
    Route::post('/user/qnect/activities', [ActivityController::class, 'StoreActivity'])
        ->name('user.qnect.activities.store');
    Route::put('/user/qnect/activities/{activity}', [ActivityController::class, 'UpdateActivity'])
        ->name('user.qnect.activities.update');
    Route::get('/user/qnect/activities/{activity}', [ActivityController::class, 'DeleteActivity'])
        ->name('user.qnect.activities.destroy');
    /**End Qnect Activity**/

    /**Start Qnect Accommodation**/
    Route::post('/user/qnect/accommodations', [AccommodationController::class, 'StoreAccommodation'])
        ->name('user.qnect.accommodations.store');
    Route::put('/user/qnect/accommodations/{accommodation}', [AccommodationController::class, 'UpdateAccommodation'])
        ->name('user.qnect.accommodations.update');
    Route::get('/user/qnect/accommodations/{accommodation}', [AccommodationController::class, 'DeleteAccommodation'])
        ->name('user.qnect.accommodations.destroy');
    /**End Qnect Accommodation**/

    /**Start Qnect Restaurant**/
    Route::post('/user/qnect/restaurants', [RestoController::class, 'StoreRestaurant'])
        ->name('user.qnect.restaurants.store');
    Route::put('/user/qnect/restaurants/{resto}', [RestoController::class, 'UpdateRestaurant'])
        ->name('user.qnect.restaurants.update');
    Route::get('/user/qnect/restaurants/{resto}', [RestoController::class, 'DeleteRestaurant'])
        ->name('user.qnect.restaurants.destroy');
    /**End Qnect Restaurant**/

    /**Start Qnect Itinerary**/
    Route::post('/user/itineraries', [ItineraryController::class, 'StoreItinerary'])
        ->name('user.itineraries.store');
    Route::put('/user/itineraries/{itinerary}', [ItineraryController::class, 'UpdateItinerary'])
        ->name('user.itineraries.update');
    Route::get('/user/itineraries/{itinerary}', [ItineraryController::class, 'DeleteItinerary'])
        ->name('user.itineraries.destroy');
    /**End Qnect Itinerary**/
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
