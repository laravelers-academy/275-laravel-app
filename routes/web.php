<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $res = Calculator::add(5)->add(8)->getResult();

    dd($res);

});
