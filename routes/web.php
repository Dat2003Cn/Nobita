<?php

use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth'])->group(function () {
    
    Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/index2', [App\Http\Controllers\HomeController::class, 'index2'])->name('index2');
    Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
    Route::get('/about2', [App\Http\Controllers\HomeController::class, 'about2'])->name('about2');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/blog-details', [App\Http\Controllers\HomeController::class, 'blog_details'])->name('blog_details');
    Route::get('/blog-sidebar', [App\Http\Controllers\HomeController::class, 'blog_sidebar'])->name('blog_sidebar');
    Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
    Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
    Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
    Route::get('/my-account', [App\Http\Controllers\HomeController::class, 'my_account'])->name('my_account');
    Route::get('/portfolio_details', [App\Http\Controllers\HomeController::class, 'portfolio_details'])->name('portfolio_details');
    Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
    Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
    Route::get('/shop-sidebar-list', [App\Http\Controllers\HomeController::class, 'shop_sidebar_list'])->name('shop_sidebar_list');
    Route::get('/shop-sidebar', [App\Http\Controllers\HomeController::class, 'shop_sidebar'])->name('shop_sidebar');
    Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
    Route::get('/single-product-gallery', [App\Http\Controllers\HomeController::class, 'single_product_gallery'])->name('single_product_gallery');
    Route::get('/single-product-sidebar', [App\Http\Controllers\HomeController::class, 'single_product_sidebar'])->name('single_product_sidebar');
    Route::get('/single-product-video', [App\Http\Controllers\HomeController::class, 'single_product_video'])->name('single_product_video');
    Route::get('/single-product', [App\Http\Controllers\HomeController::class, 'single_product'])->name('single_product');
    Route::get('/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('wishlist');

    // ---------------ADMIN------------

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    Route::match(['GET', 'POST'], '/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');


    Route::get('/orderdetail', [App\Http\Controllers\AdminController::class, 'orderdetail'])->name('orderdetail');

    //-----------------category----------------
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category'])->name('category');
    Route::match(['GET', 'POST'], '/category/add', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('add_category');
    Route::match(['GET', 'POST'], '/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update_category'])->name('update_category');
    Route::match(['GET', 'POST'], '/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete_category'])->name('delete_category');

    //------------------feedback------------------
    Route::get('/feedback', [App\Http\Controllers\FeedbackController::class, 'feedback'])->name('feedback');
    Route::match(['GET', 'POST'], '/feedback/add', [App\Http\Controllers\FeedbackController::class, 'add_feedback'])->name('add_feedback');
    Route::match(['GET', 'POST'], '/feedback/update/{id}', [App\Http\Controllers\FeedbackController::class, 'update_feedback'])->name('update_feedback');
    Route::match(['GET', 'POST'], '/feedback/delete/{id}', [App\Http\Controllers\FeedbackController::class, 'delete_feedback'])->name('delete_feedback');

    //------------------Product--------------------
    Route::get('/product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::match(['GET', 'POST'], '/product/add', [App\Http\Controllers\ProductController::class, 'add_product'])->name('add_product');
    Route::match(['GET', 'POST'], '/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update_product'])->name('update_product');
    Route::match(['GET', 'POST'], '/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete');
    //---------------------Review-------------------
    Route::get('/review', [App\Http\Controllers\ReviewController::class, 'review'])->name('review');
    Route::match(['GET', 'POST'], '/review/add', [App\Http\Controllers\ReviewController::class, 'add_review'])->name('add_review');
    Route::match(['GET', 'POST'], '/review/update/{id}', [App\Http\Controllers\ReviewController::class, 'update_review'])->name('update_review');
    Route::match(['GET', 'POST'], '/review/delete/{id}', [App\Http\Controllers\ReviewController::class, 'delete'])->name('delete');

    //---------Ordder------------------
    Route::get('/order', [App\Http\Controllers\OrderController::class, 'order'])->name('order');
    Route::match(['GET', 'POST'], '/order/add', [App\Http\Controllers\OrderController::class, 'add_order'])->name('add_order');
    Route::match(['GET', 'POST'], '/order/update/{id}', [App\Http\Controllers\OrderController::class, 'update_order'])->name('update_order');
    Route::match(['GET', 'POST'], '/order/delete/{id}', [App\Http\Controllers\OrderController::class, 'delete'])->name('delete');


    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
    // Route::get('/cart',[])
});
Route::match(['GET', 'POST'], '/index/add', [App\Http\Controllers\AdminController::class, 'add'])->name('add');
Route::match(['GET', 'POST'], '/login', [App\Http\Controllers\AdminController::class, 'login'])->name('login');
