<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiteCarController;
use App\Http\Controllers\SiteWindowController;
use App\Http\Controllers\OrderWindowController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\EstateController;
use App\Http\Controllers\Account\CarController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WindowController;
use App\Http\Controllers\Admin\CarBrandController;
use App\Http\Controllers\Admin\OrderWindowController as AdminOrderWindowController;
use App\Http\Controllers\Admin\EstateController as AdminEstateController;
use App\Http\Controllers\Admin\CarController as AdminCarController;

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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/house', [SiteController::class, 'house'])->name('house');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'send'])->name('send');
Route::get('/search', [SiteController::class, 'search'])->name('search');
Route::get('/category/{id}', [SiteController::class, 'category'])->name('category');
Route::get('/floor/{id}', [SiteController::class, 'floor'])->name('floor');
Route::get('/material/{id}', [SiteController::class, 'material'])->name('material');
Route::get('/room/{id}', [SiteController::class, 'room'])->name('room');
Route::get('/user/{id}', [SiteController::class, 'user'])->name('user');
Route::get('/estate/{slug}', [SiteController::class, 'estate'])->name('estate');

Route::get('/window', [SiteWindowController::class, 'index'])->name('site.window.index');
Route::get('/window/show/{slug}', [SiteWindowController::class, 'show'])->name('site.window.show');
Route::post('/window/order-create/{window_id}', [OrderWindowController::class, 'orderCreate'])->name('orderCreate.window.index');

Route::get('/cars', [SiteCarController::class, 'index'])->name('site.cars.index');
Route::get('/cars/brand/{id}', [SiteCarController::class, 'brand'])->name('site.cars.brand');
Route::get('/car/{slug}', [SiteCarController::class, 'show'])->name('site.car.show');
Route::get('/cars/user/{id}', [SiteCarController::class, 'user'])->name('site.car.user');
Route::get('/cars/year/{id}', [SiteCarController::class, 'year'])->name('site.car.year');
Route::get('/cars/engine/{id}', [SiteCarController::class, 'engine'])->name('site.car.engine');
Route::get('/cars/mileage/{id}', [SiteCarController::class, 'mileage'])->name('site.car.mileage');

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'loginForm'])->name('login');
    Route::get('/register', [UserController::class, 'registerForm'])->name('register');
    Route::post('/login', [UserController::class, 'login'])->name('user.login');
    Route::post('/register', [UserController::class, 'register'])->name('user.register');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.admin');
    Route::get('/estates', [AdminEstateController::class, 'index'])->name('admin.estates.index');
    Route::get('/estates/{id}', [AdminEstateController::class, 'show'])->name('admin.estates.show');
    Route::put('/estates/{id}', [AdminEstateController::class, 'update'])->name('admin.estates.update');
    Route::delete('/estates/{id}', [AdminEstateController::class, 'destroy'])->name('admin.estates.destroy');

    Route::get('/cars', [AdminCarController::class, 'index'])->name('admin.cars.index');
    Route::get('/cars/{id}', [AdminCarController::class, 'show'])->name('admin.cars.show');
    Route::put('/cars/{id}', [AdminCarController::class, 'update'])->name('admin.cars.update');
    Route::delete('/cars/{id}', [AdminCarController::class, 'destroy'])->name('admin.cars.destroy');

    Route::get('/order-window', [AdminOrderWindowController::class, 'index'])->name('order.window.index');
    Route::get('/order-window/edit/{id}', [AdminOrderWindowController::class, 'edit'])->name('order.window.edit');
    Route::get('/order-window/back/{id}/{role}', [AdminOrderWindowController::class, 'back'])->name('order.window.back');
    Route::delete('/order-window/delete/{id}', [AdminOrderWindowController::class, 'delete'])->name('order.window.delete');
    Route::get('/order-window/calculatop', [AdminOrderWindowController::class, 'calculatorList'])->name('calculatopList.window.index');
    Route::get('/order-window/{id}/calculatop', [AdminOrderWindowController::class, 'calculator'])->name('calculatop.window.index');
    Route::put('/order-window/{id}/calculatop', [AdminOrderWindowController::class, 'calculatorUpdate'])->name('calculatop.window.update');
    Route::get('/order-window/deliver', [AdminOrderWindowController::class, 'deliverList'])->name('deliver.window.index');
    Route::get('/order-window/{id}/deliver', [AdminOrderWindowController::class, 'deliver'])->name('order.window.deliver');
    Route::put('/order-window/{id}/status', [AdminOrderWindowController::class, 'statusOrder'])->name('order.window.status');

    Route::resource('/carBrands', CarBrandController::class);
    Route::resource('/windows', WindowController::class);
});

Route::middleware('auth')->prefix('account')->group(function () {

    Route::get('/', [AccountController::class, 'index'])->name('account.home');
    Route::resource('/estates', EstateController::class);
    Route::resource('/cars', CarController::class);


});
