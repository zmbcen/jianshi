<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/current_task', 'StaticPagesController@current_task');
Route::get('/add_task', 'StaticPagesController@add_task');
Route::get('/history', 'StaticPagesController@history');
Route::get('/update_database', 'StaticPagesController@update_database');
Route::get('/setting', 'StaticPagesController@setting');


