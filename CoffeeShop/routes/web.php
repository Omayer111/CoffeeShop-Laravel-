<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShowController;
use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', [ShowController::class, 'index'])->name('index');


Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');



Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'register_now'])->name('register');
});



Route::get('/panel', [AuthController::class, 'CheckIfLoggedIn'])->name('CheckIfLoggedIn');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/chefs',[AdminController::class, 'chefs'])->name('chefs');
Route::get('/menus',[AdminController::class, 'menus'])->name('menus');


Route::post('/add_new_bmenu', [AdminController::class, 'addNewBmenu'])->name('add_new_bmenu');
Route::post('/add_new_cmenu', [AdminController::class, 'addNewCmenu'])->name('add_new_cmenu');







Route::get('/users', [AdminController::class, 'users'])->name('users');

Route::get('/deletion/{id}', [AdminController::class, 'delete'])->name('delete');

Route::get('/Rdeletion/{id}', [AdminController::class, 'Rdelete'])->name('Rdelete');

Route::get('/Bdeletion/{id}', [AdminController::class, 'Bdelete'])->name('Bdelete');
Route::get('/Bupdate/{id}', [AdminController::class, 'Bupdate'])->name('Bupdate');
Route::get('/Bupdate', [AdminController::class, 'BupdateNow'])->name('BupdateNow');
Route::get('/Cupdate/{id}', [AdminController::class, 'Cupdate'])->name('Cupdate');
Route::post('/Cupdate', [AdminController::class, 'CupdateNow'])->name('CupdateNow');

Route::get('/Cdeletion/{id}', [AdminController::class, 'Cdelete'])->name('Cdelete');

Route::get('/Chefdeletion/{id}', [AdminController::class, 'Chefdelete'])->name('Chefdelete');

Route::post('/change_photo/{id}', [AdminController::class, 'changePhoto'])->name('change_photo');
Route::post('/add_new_chef', [AdminController::class, 'addNewChef'])->name('add_new_chef');
Route::post('/', [AdminController::class, 'formInfo']);

Route::post('/reservation', [AdminController::class, 'reservationInfo']);

Route::get('/Areservation', [AdminController::class, 'getreservation'])->name('Areservation');