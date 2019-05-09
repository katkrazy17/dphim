<?php 

	Route::get('/', function(){
		return view('frontends.pages.home');
	});
	Route::get('/phim', function(){
		return view('frontends.pages.watch-film');
	});
?>