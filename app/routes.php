<?php

Route::get('/', array(
	'as'	=>	'home',
	'uses'	=>	'PagesController@home'
));

Route::get('/schudule', array(
	'as'	=>	'schudule',
	'uses'	=>	'PagesController@schudule'
));
Route::get('/register', array(
	'as'	=>	'register',
	'uses'	=>	'PagesController@register'
));
Route::get('/karigor', array(
	'as'	=>	'karigor',
	'uses'	=>	'PagesController@karigor'
));
