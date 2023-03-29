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


//Food model
Route::get('/addFood', [AdminController::class, 'addFood']);
Route::post('/storeFood', [AdminController::class, 'storeFood'])->name('storeFood');
Route::get('/allFood', [AdminController::class, 'allFood']);
Route::get('/updateform/{id}', [AdminController::class, 'updateform']);
Route::post('/updateFood/{id}', [AdminController::class, 'updateFood'])->name('updateFood');
Route::get('/deleteFood/{id}', [AdminController::class, 'deleteFood']);

//reservation
Route::post('/reservation', [AdminController::class, 'reservation']);
Route::get('/view/reservation', [AdminController::class, 'viewReservation']);

//chefs
Route::get('/add/chefs', [AdminController::class, 'addChefs']);
Route::post('storeChef', [AdminController::class, 'storeChef']);
Route::get('/manage/chefs', [AdminController::class, 'manageChef']);
Route::get('/delete/chef/{id}', [AdminController::class, 'deleteChef']);
Route::get('update/chef/{id}', [AdminController::class, 'updateChef']);
Route::post('/updateChefInfo/{id}', [AdminController::class, 'updateChefInfo']);


//cart
Route::post('add/cart/{id}', [HomeController::class, 'addtoCart']);
Route::get('show/cart/{id}', [HomeController::class, 'showCart']);
Route::get('/remove/cart/{id}', [HomeController::class, 'removeCart']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
