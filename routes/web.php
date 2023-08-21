<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*Route Grouping */
Route::get('/customer', function(){
    return "<h1>Customer List</h1>";
});

Route::get('/customer/create', function(){
    return "<h1>Customer Create</h1>";
});

Route::get('/customer/show', function(){
    return "<h1>Customer Show</h1>";
});
