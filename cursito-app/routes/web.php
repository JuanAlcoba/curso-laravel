<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*

    * Route::get    | Consultar
    * Route::post    | Guardar
    * Route::delete   | Eliminar
    * Route::put    | Actualizar

*/

Route::controller(PageController::class)->group(function() {

    Route::get('/', 'home')->name('home');

    Route::get('blog', 'blog')->name('blog');

    Route::get('blog/{slug}', 'post')->name('post');
});
