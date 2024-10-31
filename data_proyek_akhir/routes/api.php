<?php

Route::get('/api/projects', 'ProjectController@index');
Route::post('/api/projects', 'ProjectController@store');