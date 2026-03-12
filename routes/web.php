<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/project-reference', function () {
    return view('project-reference');
});
