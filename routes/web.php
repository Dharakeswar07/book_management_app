<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserListController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userdashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('userdashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth', 'handle.roles:admin'])->name('admin.index');

Route::resource('/books', BookController::class);

Route::resource('/users', UserListController::class);

Route::get('/showbooks', [BookController::class, 'userindex'])->name('user.show');

Route::get('/userList',[UserListController::class,'index'])->name('user.list');

Route::post('/books/{book}/toggle-favorite', [BookController::class, 'toggleFavorite'])->name('books.toggleFavorite');
require __DIR__.'/auth.php';
