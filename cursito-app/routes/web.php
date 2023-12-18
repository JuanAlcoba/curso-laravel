<?php

use Illuminate\Support\Facades\Route;

/*

    * Route::get    | Consultar
    * Route::post    | Guardar
    * Route::delete   | Eliminar
    * Route::put    | Actualizar

*/

Route::get('/', function () {
    return view('welcome');
});


// Route::view('/blog', 'welcome');
Route::get('blog', function () {
    return 'LISTADO DE PUBLICACIONES';
});
