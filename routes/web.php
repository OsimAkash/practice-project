<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
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

// Route::get('/', function () {
//     // dd(app());
//     return view('welcome');
// });



Route::get('/', function () {

cache()->put('hello', 'world');

dd(cache()->get('hello'));

});

















//--->this is service container<---
// Route::get('/test', function(){

//     app()->make('first_service_helper');

// });
// Route::get('/2ndtest', function(){

//     app()->make('second_service_helper');

// });
// Route::get('/3rdtest', function(){

//     app()->make('third_service_helper');

// });





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';




