<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('app');
// });
// routes/web.php
use App\Http\Controllers\RentController;

Route::get('/', [RentController::class, 'showRentedBooks']);
Route::get('/rented-books', [RentController::class, 'showRentedBooks']);
Route::get('/never-rented-books', [RentController::class, 'showNeverRentedBooks']);
Route::get('/books-price-range', [RentController::class, 'showBooksPriceRange']);
Route::get('/top-customers', [RentController::class, 'showTopCustomers']);
