<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MountainesController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/info1', function () {
//     return view('info1');
// })->name('info1');

// Route::get('/admin', function () {
//     return view('admin.admin');
// })->name('admin.admin');

// Route::get('/destination', function () {
//     return view('admin.destination');
// })->name('admin.destination');

// Route::get('/info2', function () {
//     return view('info2');
// })->name('info2');

// Route::get('/info3', function () {
//     return view('info3');
// })->name('info3');

//  // EVENT
//  Route::get('events/index', [EventController::class, 'index'])->name('events.index');
//  Route::get('events/create', [EventController::class, 'create'])->name('events.create');
//  Route::post('events/store', [EventController::class, 'store'])->name('events.store');
//  Route::get('events/edit/{id}',[EventController::class,'edit'])->name('events.edit');
//  Route::post('events/update/{id}',[EventController::class,'update'])->name('events.update');
//  Route::get('events/delete/{id}',[EventController::class,'delete'])->name('events.delete');


//  // ATTENDES
//  Route::get('attendes/index', [AttendeController::class, 'index'])->name('attendes.index');
//  Route::get('attendes/create', [AttendeController::class, 'create'])->name('attendes.create');
//  Route::post('attendes/store', [AttendeController::class, 'store'])->name('attendes.store');
//  Route::get('attendes/edit/{id}',[AttendeController::class,'edit'])->name('attendes.edit');
//  Route::post('attendes/update/{id}',[AttendeController::class,'update'])->name('attendes.update');
//  Route::get('attendes/delete/{id}',[AttendeController::class,'delete'])->name('attendes.delete');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
 // CATEGORY
 Route::get('/admin/categories/{id}/toggle-status', [CategoryController::class, 'toggleStatus'])->name('categories.toggleStatus');
 Route::get('categories/index', [CategoryController::class, 'index'])->name('categories.index');
 Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
 Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
 Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
 Route::post('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');
 Route::get('categories/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');

//Package
Route::get('package/index', [PackageController::class, 'index'])->name('package.index');
Route::get('package/create', [PackageController::class, 'create'])->name('package.create');
Route::post('package/store', [PackageController::class, 'store'])->name('package.store');
Route::get('package/edit/{id}',[PackageController::class,'edit'])->name('package.edit');
Route::put('package/update/{id}',[PackageController::class,'update'])->name('package.update');
Route::delete('package/delete/{id}', [PackageController::class,'delete'])->name('package.delete');
Route::get('package/toggle-status/{id}', [PackageController::class, 'toggleStatus'])->name('package.toggleStatus');


//User
Route::get('user/index', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::get('user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('user/logout', [UserController::class, 'logout'])->name('user.logout');

//mountaines
Route::get('mountaines/index', [MountainesController::class, 'index'])->name('mountaines.index');
Route::get('mountaines/create', [MountainesController::class, 'create'])->name('mountaines.create');
Route::get('mountaines/edit', [MountainesController::class, 'edit'])->name('mountaines.edit');
Route::post('mountaines/store', [MountainesController::class, 'store'])->name('mountaines.store');
Route::get('mountaines/delete', [MountainesController::class, 'delete'])->name('mountaines.delete');
Route::get('mountaines/toggle-status/{id}', [MountainesController::class, 'toggleStatus'])->name('mountaines.toggleStatus');

//  // PROFILE
//  Route::get('profile',[ProfileController::class,'index'])->name('user.profile');
//  Route::get('logout',[AuthController::class,'logout'])->name('user.logout');





