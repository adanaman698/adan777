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

Route::get('/', function () {
    return view('welcome');
});

// Basic Routes //

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

// Parameters Routes //

Route::get('/user/{id}', function ($id) {
    return "User ID is {$id}";
});

Route::get('/user/{id}/comment/{message}', function ($id, $message) {
    return "User ID is {$id} and comment is {$message}";
});

Route::get('/profile/{user}', function ($user) {
    return view('profile', ['user' => $user]);
});

// Optional Parameters //


Route::get('/category/{name?}', function ($name = null) {
    if ($name) {
        return "Category: {$name}";
    } else {
        return "All Categories";
    }
});


// Named Routes //

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');



