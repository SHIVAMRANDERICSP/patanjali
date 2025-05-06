<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HairStylesDetailsController;
use App\Http\Controllers\HairStylistController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Models\Services;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

require __DIR__ . '/auth.php';

Auth::routes();

Route::middleware('auth', 'role:admin')->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // users
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');

    // Hair Stylist
    Route::get('/hair-styles', [HairStylesDetailsController::class, 'index'])->name('admin.hairstyles.index');

    Route::get('/hair-styles/create', [HairStylesDetailsController::class, 'create'])->name('admin.hairstyles.create');
    Route::post('/hair-styles', [HairStylesDetailsController::class, 'store'])->name('admin.hairstyles.store');
    Route::get('/hair-styles/{id}/edit', [HairStylesDetailsController::class, 'edit'])->name('admin.hairstyles.edit');
    Route::put('/hair-styles/{id}', [HairStylesDetailsController::class, 'update'])->name('admin.hairstyles.update');
    Route::delete('/hair-styles/{id}', [HairStylesDetailsController::class, 'destroy'])->name('admin.hairstyles.destroy');
    // Hair Stylist
    Route::get('/hair-stylist', [HairStylistController::class, 'index'])->name('admin.hairstylist.index');


    Route::get('/hair-stylist/create', [HairStylistController::class, 'create'])->name('admin.hairstylist.create');
    Route::post('/hair-stylist', [HairStylistController::class, 'store'])->name('admin.hairstylist.store');
    Route::get('/hair-stylist/{id}/edit', [HairStylistController::class, 'edit'])->name('admin.hairstylist.edit');
    Route::put('/hair-stylist/{id}', [HairStylistController::class, 'update'])->name('admin.hairstylist.update');
    Route::delete('/hair-stylist/{id}', [HairStylistController::class, 'destroy'])->name('admin.hairstylist.destroy');

    // Services
    Route::get('/services', [ServicesController::class, 'index'])->name('admin.services.index');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('admin.services.create');
    Route::post('/services', [ServicesController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{id}', [ServicesController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('admin.services.destroy');

    // Product Categories
    Route::get('/product-categories', [ProductCategoryController::class, 'index'])->name('admin.product_categories.index');
    Route::get('/product-categories/create', [ProductCategoryController::class, 'create'])->name('admin.product_categories.create');
    Route::post('/product-categories', [ProductCategoryController::class, 'store'])->name('admin.product_categories.store');
    Route::get('/product-categories/{id}/edit', [ProductCategoryController::class, 'edit'])->name('admin.product_categories.edit');
    Route::put('/product-categories/{id}', [ProductCategoryController::class, 'update'])->name('admin.product_categories.update');
    Route::delete('/product-categories/{id}', [ProductCategoryController::class, 'destroy'])->name('admin.product_categories.destroy');

    // products

    Route::get('/products', [ProductsController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductsController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [ProductsController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('admin.products.destroy');
});
Route::middleware('auth', 'role:user')->group(function () {
    return view('dashboard');
});



Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
