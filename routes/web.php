<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('info/peon',function(){
    return view("peon.index");

});
route::get('info/torre',function(){
    return view("torre.index");
});
route::get('info/dama',function(){
    return view("dama.index");
});