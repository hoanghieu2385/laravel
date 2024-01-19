<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/hc', 'HomeController@showWelcome');
Route::get('/showWelcome', [HomeController::class, 'ShowWelcome']);



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/about', function () {
    return 'About Content';
});

Route::get('/about/direction', function () {
    return 'Directions go here';
});

Route::any('/submit-form', function () {
    return 'Process Form';
});

//Route::get('/about/{theSubject}', function ($theSubject) {
//    return $theSubject . " " . 'content goes here';
//});

Route::get('/about/{theArt}/{thePrice}', function ($theArt, $thePrice) {
    return "The product: $theArt and $thePrice";
});

Route::get('about/direction', function() {
    return "hello";
}) ->name ('direction');

Route::get('where', function() {
    return Redirect::route('direction');
});

