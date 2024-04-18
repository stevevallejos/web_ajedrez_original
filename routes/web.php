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
route::get("mitablero",function(){
 return view("tabla.tablero");
});
route::get("tabla/idiomas",function(){
    return view("tabla.idiomas");
});

route::get("info/secretos",function(){
    return view("secretos.secretos");
});