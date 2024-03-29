<?php
use Illuminate\Support\Facades\Route;
// Frontend Controller 
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\AuthenticationController;
use App\Http\Controllers\Frontend\CartController;
// Backend Controller 
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\DivisionController;
use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\DashboardController;

/*
|--------------------------------------------------------------------------
| Language Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

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
// frontend main pages
Route::get('/', [PagesController::class, 'home_page'])->name('home_page');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::get('/terms-and-condetion', [PagesController::class, 'terms_and_condetion'])->name('terms-and-condetion');
Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/return-refund', [PagesController::class, 'return_and_refund'])->name('return_and_refund');
Route::get('/purchase-guide', [PagesController::class, 'purchase_guide'])->name('purchase_guide');

// Authentication Pages For Prontend
route::group(['prefix' => '/customer'], function(){
Route::get('/login', [AuthenticationController::class, 'login'])->name('customer_login');
Route::get('/regester', [AuthenticationController::class, 'regester'])->name('customer_regester');
Route::get('/forgot-password', [AuthenticationController::class, 'forgot_password'])->name('customer_forgot_password');
Route::get('/reset_password', [AuthenticationController::class, 'reset_password'])->name('customer_reset_password');
});

//  Cart & Checkout pages
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');

// product pages
Route::get('/all-products', [PagesController::class, 'all_products'])->name('all_products');
Route::get('/product-details', [PagesController::class, 'product_single_page'])->name('product_single_page');

Route::get('/invoice', [PagesController::class, 'invoice'])->name('invoice');
Route::get('/account', [PagesController::class, 'account'])->name('account');

// 404 page
Route::get('/404', [PagesController::class, 'page_not_found'])->name('404');




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
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'IsAdmin'])->name('admin.dashboard');
    Route::get('/languageDemo', [DashboardController::class, 'dashboard'])->name('languageDemo');
    
    
    // Brand Group
    Route::group(['prefix' => '/brand'], function(){
    Route::get('/manage', [BrandController::class, 'brand'])->middleware(['auth'])->name('brand.manage');
    Route::get('/create', [BrandController::class, 'create'])->middleware(['auth'])->name('brand.create');
    Route::post('/store', [BrandController::class, 'store'])->middleware(['auth'])->name('brand.store');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->middleware(['auth'])->name('brand.edit');
    Route::post('/update/{id}', [BrandController::class, 'update'])->middleware(['auth'])->name('brand.update');
    Route::post('/destroy/{id}', [BrandController::class, 'destroy'])->middleware(['auth'])->name('brand.destroy');
  });


    // category Group
    Route::group(['prefix' => '/category'], function(){
    Route::get('/manage', [CategoryController::class, 'category'])->middleware(['auth'])->name('category.manage');
    Route::get('/create', [CategoryController::class, 'create'])->middleware(['auth'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->middleware(['auth'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->middleware(['auth'])->name('category.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->middleware(['auth'])->name('category.update');
    Route::post('/destroy/{id}', [CategoryController::class, 'destroy'])->middleware(['auth'])->name('category.destroy');
    });

     // Product Group
     Route::group(['prefix' => '/product'], function(){
        Route::get('/manage', [ProductController::class, 'product'])->middleware(['auth'])->name('product.manage');
        Route::get('/create', [ProductController::class, 'create'])->middleware(['auth'])->name('product.create');
        Route::post('/store', [ProductController::class, 'store'])->middleware(['auth'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->middleware(['auth'])->name('product.edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->middleware(['auth'])->name('product.update');
        Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->middleware(['auth'])->name('product.destroy');
        });


          // Vendor Group
     Route::group(['prefix' => '/vendor'], function(){
        Route::get('/manage', [VendorController::class, 'vendor'])->middleware(['auth'])->name('vendor.manage');
        Route::get('/create', [VendorController::class, 'create'])->middleware(['auth'])->name('vendor.create');
        Route::post('/store', [VendorController::class, 'store'])->middleware(['auth'])->name('vendor.store');
        Route::get('/edit/{id}', [VendorController::class, 'edit'])->middleware(['auth'])->name('vendor.edit');
        Route::post('/update/{id}', [VendorController::class, 'update'])->middleware(['auth'])->name('vendor.update');
        Route::post('/destroy/{id}', [VendorController::class, 'destroy'])->middleware(['auth'])->name('vendor.destroy');
        });


          // division Group
     Route::group(['prefix' => '/division'], function(){
      Route::get('/manage', [DivisionController::class, 'division'])->middleware(['auth'])->name('division.manage');
      Route::get('/create', [DivisionController::class, 'create'])->middleware(['auth'])->name('division.create');
      Route::post('/store', [DivisionController::class, 'store'])->middleware(['auth'])->name('division.store');
      Route::get('/edit/{id}', [DivisionController::class, 'edit'])->middleware(['auth'])->name('division.edit');
      Route::post('/update/{id}', [DivisionController::class, 'update'])->middleware(['auth'])->name('division.update');
      Route::post('/destroy/{id}', [DivisionController::class, 'destroy'])->middleware(['auth'])->name('division.destroy');
      });
        
          // district Group
     Route::group(['prefix' => '/district'], function(){
        Route::get('/manage', [DistrictController::class, 'district'])->middleware(['auth'])->name('district.manage');
        Route::get('/create', [DistrictController::class, 'create'])->middleware(['auth'])->name('district.create');
        Route::post('/store', [DistrictController::class, 'store'])->middleware(['auth'])->name('district.store');
        Route::get('/edit/{id}', [DistrictController::class, 'edit'])->middleware(['auth'])->name('district.edit');
        Route::post('/update/{id}', [DistrictController::class, 'update'])->middleware(['auth'])->name('district.update');
        Route::post('/destroy/{id}', [DistrictController::class, 'destroy'])->middleware(['auth'])->name('district.destroy');
        });

        // Currency Group
     Route::group(['prefix' => '/currency'], function(){
      Route::get('/manage', [CurrencyController::class, 'currency'])->middleware(['auth'])->name('currency.manage');
      Route::get('/create', [CurrencyController::class, 'create'])->middleware(['auth'])->name('currency.create');
      Route::post('/store', [CurrencyController::class, 'store'])->middleware(['auth'])->name('currency.store');
      Route::get('/edit/{id}', [CurrencyController::class, 'edit'])->middleware(['auth'])->name('currency.edit');
      Route::post('/update/{id}', [CurrencyController::class, 'update'])->middleware(['auth'])->name('currency.update');
      Route::post('/destroy/{id}', [CurrencyController::class, 'destroy'])->middleware(['auth'])->name('currency.destroy');
      });
});

// Route::get('/', function () {
//     return view('dash');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

