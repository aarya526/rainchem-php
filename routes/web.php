<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::post('/categories/load-more', [HomeController::class, 'loadMoreCategories']);

Route::get('/category/{categoryName}/{id}', [HomeController::class, 'viewCategoryPages']);

Route::get('/view-product-details/{id}', [HomeController::class, 'viewSingleProductDetails']);

Route::post('/add-to-cart', [CartController::class, 'addToCart']);

Route::post('/update-cart-item', [CartController::class, 'updateCartItem']);

Route::get('/delete-cart-item/{id}', [CartController::class, 'deleteCartItem']);

Route::get('/view-cart', [CartController::class, 'viewCart']);

Route::get('/checkout', [OrderController::class, 'checkout']);

Route::post('/place-order', [OrderController::class, 'placeOrder']);

Route::get('/aboutUs', [HomeController::class, 'aboutUs']);

Route::get('/blog', [HomeController::class, 'blog']);

Route::get('/careers', [HomeController::class, 'careers']);

Route::get('/contactUs', [HomeController::class, 'contactUs']);

Route::get('/privacyPolicy', [HomeController::class, 'privacyPolicy']);

Route::get('/terms', [HomeController::class, 'terms']);

Route::get('/vendorRegistration', [HomeController::class, 'vendorRegistration']);

Route::post('/contractManufacturingForm', [HomeController::class, 'submitContractForm']);

Route::post('/contactUsFormSubmit', [HomeController::class, 'submitContactForm']);

Route::get('/requestaquote', [HomeController::class, 'requestaquoteForm']);

Route::post('/requestaquotePost', [HomeController::class, 'requestaquoteFormPost']);

//Admin Routes
Route::get('/admin/dashboard', [AdminHomeController::class, 'dashboard']);
Route::get('/admin/view-products', [AdminProductController::class, 'viewProducts']);
Route::get('/admin/add-product', [AdminProductController::class, 'addProduct'])->name('product.add');
Route::post('/admin/create-product', [AdminProductController::class, 'createProduct'])->name('product.create');
Route::get('/admin/edit-product/{id}', [AdminProductController::class, 'editProduct'])->name('product.edit');
Route::put('/admin/edit-product', [AdminProductController::class, 'editProductPost'])->name('product.update');
Route::get('/admin/view-categories', [AdminCategoryController::class, 'categories']);
Route::get('/admin/add-category', [AdminCategoryController::class, 'addCategory'])->name('category.add');
Route::post('/admin/create-category', [AdminCategoryController::class, 'createCategory'])->name('category.create');
Route::get('/admin/edit-category/{id}', [AdminCategoryController::class, 'editCategory'])->name('category.edit');
Route::put('/admin/edit-category', [AdminCategoryController::class, 'editCategoryPost'])->name('category.update');

//End of Admin Routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
