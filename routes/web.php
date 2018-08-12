<?php

Route::get('/', 'UsersController@home')->name('home');
Route::get('/current_task', 'TasksController@current_task')->name('current_task');
Route::get('/add_task', 'TasksController@add_task')->name('add_task');
Route::get('/history', 'HistroyController@history')->name('history');
Route::get('/update_database', 'UpdateDatabaseController@update_database')->name('update_database');
Route::get('/setting', 'UsersController@setting')->name('setting');


