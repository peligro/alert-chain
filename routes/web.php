<?php

Route::get('/', 'IndexController@index')->name('index_index');
Route::get('api/v1/alimentador', 'RestController@alimentador')->name('alimentador');
