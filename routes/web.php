<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


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
     return view('home');
})->name('home');
Route::get('/cloud', [ProductController::class,'cloudServices'])->name('products.cloud');
Route::get('/colocation', [ProductController::class,'colocation'])->name('products.colocation');

Route::get('/hospital-management-system', [ProductController::class,'hms'])->name('hms');
Route::get('/contact-center', function () {
    return view('services.contactcenter');
})->name('contactcenter');
Route::get('/zimbra-mail', function () {
    return view('services.zimbra');
})->name('zimbra');
Route::get('/revenue-collection-system', function () {
    return view('services.revenue');
})->name('revenue');
Route::get('/e-board', function () {
    return view('services.eboard');
})->name('eboard');




Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contactus');
})->name('contactus');


Route::get('/checkout', [ProductController::class,'checkoutForm'])->name('products. checkout');
Route::post('/checkout', [ProductController::class,'checkoutSubmit']);
Route::get('sendMail',[ProductController::class,'checkoutSubmit']);

Route::post('/sendMessage',[ProductController::class,'sendMessage']);
Route::get('/home',[ProductController::class,'comingsoon'])->name('comingsoon');


Route::get('products', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::get('/dashboard', function () {
    return view('admin.dashboard2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
