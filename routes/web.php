<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{title}/{id}/{cat}', function ($title, $id, $cat) {
    return view("{$cat}.index", ['title' => $title, 'id' => $id, 'cat' => $cat]);
    })->where('Title', '[A-z]+')->where('id', '[0-9]+')->wherein('cat', ['economy' , 'sport' , 'values']);
