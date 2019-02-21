<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get ('/',function (){
  return view ('welcome');
});
Route::get ('/info','PaginasController@info');
Route::get ('/contacto','PaginasController@contacto');
Route::get ('/bienvenida/{nombre}/{apellido}','PaginasController@info')

Auth::routes();

Route::get ('/contacto',function (){
  return view ('paginas.contacto');
});
Route::get ('/bienvenida/{nombre}/{apellido?}',function($nombre, $apellido = null){
  return $nombre . ' ' . $apellido;
return view ('paginas.bienvenida')
  ->with([
    'nombre' => $nombre,
    'apellido' =>$apellido
  ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
