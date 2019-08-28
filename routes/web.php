<?php


Route::get('/', function () {
    return 'hello, world!';
});
Route::get('/about', function () {
    return view('about');
});