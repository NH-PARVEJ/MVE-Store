<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/', [PagesController::class, 'home'])->name('home');


/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


route::group(['prefix' => 'admin'], function(){
    // Super Admin Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    // Brand Group
    Route::group(['prefix' => '/brand'], function(){
    Route::get('/manage', [BrandController::class, 'brand'])->name('brand.manage');
    Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/edit', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update', [BrandController::class, 'update'])->name('brand.update');
    Route::post('/destroy', [BrandController::class, 'destroy'])->name('brand.destroy');
    });

});