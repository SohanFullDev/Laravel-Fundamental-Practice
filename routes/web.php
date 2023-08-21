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

//Route Methods
/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 */

