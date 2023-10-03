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

Route::get('/home', function(){

    $blogs = [
        [
            'title' => 'Title one',
            'body' => 'This is a body text',
            'status' => 1

        ],
        [
            'title' => 'Title Two',
            'body' => 'This is a body text',
            'status' => 0

        ],
        [
            'title' => 'Title Three',
            'body' => 'This is a body text',
            'status' => 1

        ],
        [
            'title' => 'Title Four',
            'body' => 'This is a body text',
            'status' => 0

        ],
        [
            'title' => 'Title Five',
            'body' => 'This is a body text',
            'status' => 1

        ]
        ,
        [
            'title' => 'Title Six',
            'body' => 'This is a body text',
            'status' => 0

        ]

    ];


    return view('home', compact('blogs'));
});

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('contact', function(){
    return view('contact');
});

Route::get('test', function(){
    $test = 'This is test index page.2';
    $test2 = 'This is test 2';

   // return view('test.index', ['test' => $test]);
    return view('test.index', compact('test','test2'));
});

/**Fallback Route */

Route::fallback(function(){
    return "Route Not Exists!";
});
