<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id?}', function (string $value=null) {
    if($value){
    return "<h1>User ID:".$value."</h1>";
    }else{
        return "<h1>No Id given</h1>";
    }
})->whereNumber('id');

