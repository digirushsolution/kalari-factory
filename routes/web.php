<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomPasswordResetController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FranchiseContactController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;



//register routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//login and logout routes
Route::get('/adminlogin', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//Password Reset routes
Route::get('password/reset', [CustomPasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [CustomPasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('password/reset/{token}', [CustomPasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [CustomPasswordResetController::class, 'reset'])->name('password.update');
//Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
//blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');


//blogs category routes
Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
Route::delete('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');


Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');



Route::get('/case-study', [SettingController::class,'case_study'])->name('case-study');
Route::get('/setting', [SettingController::class, 'metaPage'])->name('metaPage');
Route::post('/settings/update', [SettingController::class, 'updateSetting'])->name('settings.update');
Route::post('/settings/new-meta', [SettingController::class, 'new_meta_add'])->name('settings.new_meta');
Route::get('settings/edit-meta/{id}', [SettingController::class, 'editSettingForm'])->name('settings.edit_meta');

//product category routes
Route::get('/product-categories', [ProductCategoryController::class, 'index'])->name('product-categories.index');
Route::get('/product-categories/create', [ProductCategoryController::class, 'create'])->name('product-categories.create');
Route::post('/product-categories', [ProductCategoryController::class, 'store'])->name('product-categories.store');
Route::get('/product-categories/{id}/edit', [ProductCategoryController::class, 'edit'])->name('product-categories.edit');
Route::put('/product-categories/{id}', [ProductCategoryController::class, 'update'])->name('product-categories.update');
Route::delete('/product-categories/{id}', [ProductCategoryController::class, 'destroy'])->name('product-categories.destroy');

// Product Routes
Route::get('/add-products', [ProductController::class, 'index'])->name('products-index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

});


//frontend routes
Route::get('/', [ViewController::class,'home'])->name('home');
Route::get('/about', [ViewController::class, 'about'])->name('about');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::get('/buy-kalari-online', [ViewController::class, 'kalari'])->name('kalari');
Route::get('/cart', [ViewController::class, 'cart'])->name('cart');


Route::get('/cafe', [ViewController::class, 'cafe'])->name('cafe');
Route::get('/privacy-policy', [ViewController::class, 'privacy'])->name('privacy');
Route::get('/franchise', [ViewController::class, 'franchise'])->name('franchise');
Route::get('/products', [ViewController::class, 'products'])->name('products');
Route::get('/refund-policy', [ViewController::class, 'refund'])->name('refund');
Route::get('/terms-conditions', [ViewController::class, 'termsconditions'])->name('termsconditions');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::get('/singlepage', [ViewController::class, 'singlepage'])->name('single_page');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/franchise-contact', [FranchiseContactController::class, 'store'])->name('franchise.contact.store');
Route::post('/register', [UserController::class, 'store'])->name('user.store');

