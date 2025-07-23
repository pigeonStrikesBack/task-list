<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/xxx', fn() => ''
    . '<p>Hello, World!</p>'
    . '<p><a href="/">Root</a></p>'
)->name('hello');

Route::get('/hallo', fn() => redirect()->route('hello') );

Route::get('/greet/{name}', fn($name) => ""
    . "<p>Hello $name!</p>"
    . "</p><a href=\"/\">Root</a></p>"
);

Route::fallback(fn() => "The missing you were thing is finding");
