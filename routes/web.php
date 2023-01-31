<?php


Route::get('/','ClientesController@index');
Route::get('/{id}','ClientesController@getClientes');

