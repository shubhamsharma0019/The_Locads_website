<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\LicenseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::redirect('/home', '/');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/industries', 'industries')->name('industries');
    Route::get('/signage', 'signage')->name('signage');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/book-demo', 'bookDemo')->name('contact.alt');
    Route::redirect('/contact-alt', '/book-demo');
    Route::get('/faq', 'faq')->name('faq');
});
Route::get('/dashboard/enquiries', [EnquiryController::class, 'index'])
    ->middleware('auth')
    ->name('enquiries.index');
Route::put('/dashboard/enquiries/{enquiry}', [EnquiryController::class, 'update'])
    ->middleware('auth')
    ->name('enquiries.update');
Route::post('/enquiries', [EnquiryController::class, 'store'])->name('enquiries.store');
Route::post('/licence', [LicenseController::class, 'store'])->name('licence.store');

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/
Route::prefix('products')->name('products.')->controller(ProductController::class)->group(function () {
    Route::get('/', 'indexA')->name('index');
    Route::get('/style-b', 'indexB')->name('index-b');
    Route::get('/style-c', 'indexC')->name('index-c');
    Route::get('/style-d', 'indexD')->name('index-d');
    Route::get('/style-e', 'indexE')->name('index-e');
    Route::get('/style-f', 'indexF')->name('index-f');
    Route::get('/style-g', 'indexG')->name('index-g');
    Route::get('/rental-products', 'publicRentals')->name('rental-products');
    Route::get('/detail', 'showA')->name('show');
    Route::get('/detail-b', 'showB')->name('show-b');
    Route::get('/item/{productSlug}', 'showProduct')->name('detail');
    Route::get('/create', 'create')->middleware('auth')->name('create');
    Route::get('/rentals', 'rentals')->middleware('auth')->name('rentals');
    Route::post('/', 'store')->middleware('auth')->name('store');
    Route::put('/{productId}', 'update')->middleware('auth')->name('update');
    Route::delete('/{productId}', 'destroy')->middleware('auth')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Blog
|--------------------------------------------------------------------------
*/
Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/post', 'show')->name('post');
    Route::get('/{blogSlug}', 'show')->name('show');
});

/*
|--------------------------------------------------------------------------
| AUTH (IMPORTANT)
|--------------------------------------------------------------------------
*/

// Admin login page
Route::get('/admin', [AuthController::class, 'showLogin'])->middleware('guest')->name('login');
Route::redirect('/login', '/admin');

// Admin login submit
Route::post('/admin', [AuthController::class, 'login'])->middleware('guest');

// Dashboard (protected)
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/update-password', [AuthController::class, 'updatePassword'])
    ->middleware('auth')
    ->name('update.password');
