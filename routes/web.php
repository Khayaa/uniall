<?php

use App\Http\Controllers\category\AllCategories;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\Auth\AdminCreateComponent;
use App\Http\Livewire\Admin\Auth\AdminLoginComponent;
use App\Http\Livewire\Blog\BlogComponent;
use App\Http\Livewire\Cart\CartComponent;
use App\Http\Livewire\Shop\ShopComponent;
use App\Http\Livewire\Wishlist\WishlistComponent;
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

// Route::get('/', function () {
//     return view('Home-controller');
// });

Route::get('/', [HomeController::class ,'show']);
Route::get('/categories', [AllCategories::class ,'show'])->name('all-categories');
Route::get('/cart' , CartComponent::class)->name('cart');
Route::get('/wishlist' , WishlistComponent::class)->name('wishlist');
Route::get('/blog' , BlogComponent::class)->name('blog');
Route::get('/shop' , ShopComponent::class)->name('shop');
// Route::get('/categories/{slug}', [AllCategories::class ,'show'])->name('all-categories');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin Routes

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/login' , AdminLoginComponent::class)->name('login');
    Route::get('/register' , AdminCreateComponent::class)->name('register');
Route::middleware(['auth:admin' ,'is_admin'])->group(function (){

});

});
