<?php

use App\Http\Controllers\ProfileController;
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
        // return view('welcome');
    return view('profile.index');
});

Route::get('/quiz', function () {
        // return view('welcome');
    return view('quiz');
})->name('quiz');

Route::get('/welcome', function () {
        // return view('welcome');
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashuz', function () {
    return view('dashUz');
})->middleware(['auth', 'verified'])->name('dash_uz');

Route::get('/dashru', function () {
    return view('dashRu');
})->middleware(['auth', 'verified'])->name('dash_ru');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
