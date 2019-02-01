<?php
Route::get('test', function(){
	echo 'Hello from the calculator package!';
});

Route::get('/admin', function () {
    return view('AdminPanel::login');
});

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {

	Route::get('/dashboard', function () {
    	return view('AdminPanel::dashboard');
	})->name('admin.dashboard');
	Route::get('/users', function () {
    	return view('AdminPanel::users.users');
	})->name('admin.users');

});