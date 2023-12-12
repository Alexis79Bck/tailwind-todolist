<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tutorial\ExampleController;

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

Route::view('/', 'welcome');

Route::prefix('tutorials')->group(function () {
    Route::get('/example1', [ExampleController::class, 'example1']);
    Route::get('/example2', [ExampleController::class, 'example2']);
    Route::get('/example3', [ExampleController::class, 'example3']);
    Route::get('/example4', [ExampleController::class, 'example4']);
    Route::get('/example5', [ExampleController::class, 'example5']);
});


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
