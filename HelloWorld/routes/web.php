<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;


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

//Route::get('/show', 'HomeController@showWelcome');






Route::get('/', function () {
    return view('welcome');
});

// 17
Route::get('/showWelcome', [HomeController::class, 'ShowWelcome']);



/////////////////////////////////////////////////////
//Route::get('/about', function () {
//    return 'About Content';
//});

// 18
Route::get('/about', [AboutController::class, 'showDetails']);


/////////////////////////////////////////////////////
Route::get('/about/direction', function () {
    return 'Directions go here';
});

Route::any('/submit-form', function () {
    return 'Process Form';
});





//Route::get('/about/{theSubject}', function ($theSubject) {
//    return $theSubject . " " . 'content goes here';
//});
// 19
Route::get('about/{theSubject}', [AboutController::class, 'showSubject']);



////////////////////////////////////////////////////
Route::get('/about/{theArt}/{thePrice}', function ($theArt, $thePrice) {
    return "The product: $theArt and $thePrice";
});

Route::get('about/direction', function() {
    return "hello";
}) ->name ('direction');

Route::get('where', function() {
    return Redirect::route('direction');
});

//////////////////////////////////////////////////// NEW PAGE
///
/// 22
Route::get('/profile/{name}', [ProfileController::class, 'showProfile']);


