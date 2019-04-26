<?php

Route::get('/index','DictionaryController@show');
Route::post('/index','DictionaryController@translate1')->name('sky');


