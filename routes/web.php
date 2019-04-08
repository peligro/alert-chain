<?php

Route::get('/', 'IndexController@index')->name('index_index');
Route::post('api/v1/alimentador', 'RestController@alimentador')->name('alimentador');
