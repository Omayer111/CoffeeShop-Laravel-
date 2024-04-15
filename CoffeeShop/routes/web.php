<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShowController;

Route::get('/', [ShowController::class, 'index'])->name('index');


Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::group(['middleware' => 'guest'], function () {

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_now'])->name('register');
});


Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [AuthController::class, 'home'])->name('home');
    Route::get('logout', function () {
        session()->flush();
        auth()->logout();
        return redirect()->route('login');
    })->name('logout');

});

Route::get('/chefs',[AdminController::class, 'chefs'])->name('chefs');
Route::get('/menus',[AdminController::class, 'menus'])->name('menus');









Route::get('/users', [AdminController::class, 'users'])->name('users');

Route::get('/deletion/{id}', [AdminController::class, 'delete'])->name('delete');

Route::get('/Rdeletion/{id}', [AdminController::class, 'Rdelete'])->name('Rdelete');

Route::get('/Bdeletion/{id}', [AdminController::class, 'Bdelete'])->name('Bdelete');
Route::get('/Bupdate/{id}', [AdminController::class, 'Bupdate'])->name('Bupdate');
Route::get('/Bupdate', [AdminController::class, 'BupdateNow'])->name('BupdateNow');

Route::get('/Cdeletion/{id}', [AdminController::class, 'Cdelete'])->name('Cdelete');

Route::get('/Chefdeletion/{id}', [AdminController::class, 'Chefdelete'])->name('Chefdelete');

Route::post('/', [AdminController::class, 'formInfo']);

Route::post('/reservation', [AdminController::class, 'reservationInfo']);

Route::get('/Areservation', [AdminController::class, 'getreservation'])->name('Areservation');