<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
        'products' => Route::has('products'),
        'stock' => Route::has('stock'),
        'product-types' => Route::has('product-types'),
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

    Route::get('addProduct', [ProductController::class, 'create'])
        ->name('addProduct');
    Route::get('products', [ProductController::class, 'index'])
        ->name('products');

    Route::get('stock', [ProductTypeController::class, 'create'])
        ->name('stock');

    Route::get('product-types', [ProductTypeController::class, 'index'])
        ->name('product-types');
    Route::get('addCategory', [ProductTypeController::class, 'create'])
        ->name('addCategory');
});

require __DIR__.'/auth.php';
