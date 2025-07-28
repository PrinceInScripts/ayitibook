<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home',[PageController::class, 'home'])->name('home');
    Route::get('/about',[PageController::class, 'about'])->name('about');
    Route::get('/contact',[PageController::class, 'contact'])->name('contact');
    Route::get('/my-account',[PageController::class, 'myAccount'])->name('my-account');
    Route::get('/wishlist',[PageController::class, 'wishlist'])->name('wishlist');
    Route::get('/cart',[PageController::class, 'cart'])->name('cart');
    Route::get('/contact-seller',[PageController::class, 'contactSeller'])->name('contact-seller');
    Route::get('/product-details/{id}', [PageController::class, 'productDetails'])->name('product-details');
    Route::get('/search-product', [PageController::class, 'searchProduct'])->name('search-product');
});

require __DIR__.'/auth.php';
