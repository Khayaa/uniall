<?php

use App\Http\Controllers\category\AllCategories;
use App\Http\Controllers\HomeController;
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
