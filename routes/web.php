<?php
#未登录时展示的页面
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('users','UsersController');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destroy')->name('logout');

#登录后展示的页面
Route::get('/current_task', 'TasksController@current_task')->name('current_task');
Route::get('/add_task', 'TasksController@add_task')->name('add_task');
Route::get('/history', 'HistroyController@history')->name('history');   #这个路由暂时没用了
Route::get('/update_database', 'UpdateDatabaseController@update_database')->name('update_database');

Route::resource('tasks','TasksController');