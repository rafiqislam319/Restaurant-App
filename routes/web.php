<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/redirects', [HomeController::class, 'redirects']);


Route::get('/users', [AdminController::class, 'allUser'])->name('users');
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');



Route::get('/addFood', [AdminController::class, 'addFood']);
Route::post('/storeFood', [AdminController::class, 'storeFood'])->name('storeFood');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
