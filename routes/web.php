<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/groups', function () {
    return view('groups');
});
Route::get('/books', function () {
    return view('books');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

//Auth
Route::get('/register', [AuthController::class, 'signup']);
Route::post('/auth/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'signin']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class,  'logout']);
