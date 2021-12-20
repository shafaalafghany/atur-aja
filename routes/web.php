<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Models\Group;
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


//Home
Route::get('/', function () {
    return view('dashboard');
});

//Auth
Route::get('/register', [AuthController::class, 'signup']);
Route::post('/auth/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'signin']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class,  'logout']);

//Group
Route::get('/groups', [GroupController::class, 'view_groups']);
Route::get('/groups/add-group', [GroupController::class, 'add_group']);
Route::get('/groups/edit-group/{id}', [GroupController::class, 'view_edit_group']);
Route::post('/groups/add', [GroupController::class, 'store']);
Route::post('groups/edit/{id}', [GroupController::class, 'edit']);
Route::get('groups/delete/{id}', [GroupController::class, 'delete']);

//Book
Route::get('/books/{id_group}', [BookController::class, 'view_books']);
Route::get('/books/{id_group}/add-book', [BookController::class, 'view_add_book']);
Route::get('/books/{id_group}/edit-book/{id_book}',[BookController::class, 'view_edit_book']);
Route::post('/books/add/{id_group}', [BookController::class, 'store']);
Route::post('/books/{id_group}/edit/{id_book}', [BookController::class, 'edit']);
Route::get('/books/{id_group}/delete/{id_book}', [BookController::class, 'delete']);

//Transaction
Route::get('/transactions', function () {
    return view('transactions');
});
Route::get('/transactions/add-transaction', function () {
    return view('add_transaction');
});
Route::get('/transactions/edit-transaction', function () {
    return view('edit_transaction');
});

//Attribute
Route::get('/transactions/edit-attribute', function () {
    return view('edit_attribute');
});