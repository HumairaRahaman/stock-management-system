<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\StockController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'canLogout' => Route::has('logout'),
        'addProduct' => Route::has('addProduct'),
        'product' => Route::has('product'),
        'stock' => Route::has('stock'),
        'category' => Route::has('category'),
        'addCategory' => Route::has('addCategory'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('addProduct', [AddProductController::class, 'create'])
        ->name('addProduct');
    Route::get('product', [AddProductController::class, 'index'])
        ->name('product');
    Route::get('stock', [StockController::class, 'create'])
        ->name('stock');
    Route::get('category', [CategoryController::class, 'index'])
        ->name('category');
    Route::get('addCategory', [CategoryController::class, 'create'])
        ->name('addCategory');
});

require __DIR__.'/auth.php';
