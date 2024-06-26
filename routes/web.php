<?php

use App\Http\Controllers\Back\BackHomeController;
use App\Http\Controllers\FrontHomeController;
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


//FRONT DESIGN
Route::prefix('front')->name('front.')->group(function(){
    Route::get('/home',FrontHomeController::class)->middleware('auth')->name('home');
    // Route::view('login','front.auth.login');
    // Route::view('register','front.auth.register');
    // Route::view('forgot-password','front.auth.forgot-password');

});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

 

//BACK DESIGN
Route::prefix('back')->name('back.')->group(function(){
    Route::get('/home',BackHomeController::class)->middleware('admin')->name('home');
    //  Route::view('login','back.auth.login');
    //  Route::view('register','back.auth.register');
    // Route::view('forgot-password','back.auth.forgot-password');
    require __DIR__.'/adminuth.php';


});




//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

//  Route::middleware('auth')->group(function () {
//      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//      Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//      Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//  });

