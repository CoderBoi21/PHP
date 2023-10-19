<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::resource('/contact', ContactController::class);
