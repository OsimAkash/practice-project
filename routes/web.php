<?php

use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\SecondController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Repositories\additon;
use App\Repositories\Test;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
    // dd(app());
    return view('welcome');
});


















Route::get('/about', function (Request $request )  {
   $token = $request->session()->token();
   $token= csrf_token();
   dd($token);
})->name('about.us');

Route::get('/test', function (Request $request)  {
    Log::info('This is your age' .rand(1,30));
    return redirect()->to('/');
});

// Route::get('/country', function ()  {
    //     return view('country');
// })->middleware('country');

// Route::match([ 'get', 'post' ], '/about', function(){
    // return view('about');
    // });
    
    // Route::get('/about', function ()  {  
//     return redirect('/contact');
// });

// Route::get('/about', function ()  {  
//     return view('about');
// })->name('about.us');

// Route::view('/about', 'about' );

//__*__laravel-7 Controlller  Get Method
// Route::get('/contact', 'Example/FirstController@index')->name('contact.us');
//___*___laravel-8
Route::get('/contact-us', [FirstController::class, 'index'])->name('contact.us');
Route::get('/about-us', [FirstController::class, 'aboutIndex'])->name('about.us');
Route::get('/laravel', [FirstController::class, 'laravel'])->name('laravel');
Route::get('/testone', [SecondController::class, 'test']);

//__POST method __ //
// Route::post('/student/edit', [FirstController::class, 'Studentstore'])->name('student.store');
Route::post('/store/contact', [FirstController::class, 'store'])->name('store.contact');
// Route::post('/about/store', [FirstController::class, 'aboutstore'])->name('about.store');


//__*__invokable Route

Route::get('/learn', LearnController::class);
// Route::get('/hello', LearnController::class, 'hello');


//___ Resource Route___ 
// Route::get('/photos/popular', [PhotoController::class, 'popular']);
// Route::resource('photos', PhotoController::class);




// Route::get('/contact', function(){
    // return view('contact');
    // })->name('contact.us');
    
    
    // Route::get(md5('/contacaaaaaat'), function(){
    //     return view('contact');
    // })->name('contact.us');
    
// Route::get('/contact/{roll}', function($roll){
// return "My roll is: $roll";
// });


// Route::get('/', function () {

//     // How to Cache Use 
// // cache()->put('hello', 'world');
// // dd(cache()->get('hello'));

// // Cache::put('Hello','World');
// // dd(cache()->get('Hello'));

// });

















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





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';