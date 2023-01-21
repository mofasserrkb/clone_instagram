<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});
Route::get('/dashboard/home', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/dashboard/profile/{user}',[ProfileController::class, 'index'])->name('index');
Route::group(['middleware'=>'auth','prefix'=>'dashboard'],function(){

    // Route::get('/home',[ProfileController::class, 'index'])->name('index');
  //  Route::get('/profile',[ProfileController::class, 'index'])->name('index');
    Route::get('/p/create',[PostController::class, 'create'])->name('post.create');
    Route::post('/p',[PostController::class, 'store'])->name('post.store');
    Route::get('/p/{post}',[PostController::class, 'show'])->name('post.show');
  //  Route::get('/profile/{user}',[ProfileController::class, 'index'])->name('index');
    Route::get('/profile/{user}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}',[ProfileController::class, 'update'])->name('profile.update');
}
);
//Route::get('/dashboard/profile/{user}',[ProfileController::class, 'index'])->name('index');
//Route::get('/profile/{user}',[ProfileController::class, 'show'])->name('profile.show');
