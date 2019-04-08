<?php

Route::get('/', 'IndexController@index')->name('index_index');
Route::resource('api/v1/recibir', 'RestController');
