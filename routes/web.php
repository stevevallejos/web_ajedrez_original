<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

route::get("QR/torre",function(){
    return view("QR.QR");
});

route::get("tienda/chess",function(){
    return view("tienda.tienda");
});

route::get("tienda/tablerovino",function(){
    return view("tienda.tablerovino");
});

route::get("tienda/tablerovinocompra",function(){
    return view("tienda.tablerovinocompra");
});
route::get("crear/usuario",[UserController::class,'create']);

route::post("guardar/usuario",[UserController::class,'store'])->name('users.store');

route::get("listar/usuario",[UserController::class,'index'])->name('users.index');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
