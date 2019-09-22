<?php

Route::group([
    'namespace' => 'Auth',
], function () {
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login_page');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});

Route::group([
    'middleware' => [
        'auth:seller',
    ],
], function () {
    Route::get('/', 'SellerController@index')->name('dashboard');
    Route::get('home', 'SellerController@index')->name('dashboard');
    Route::get('dashboard', 'SellerController@index')->name('dashboard');
});
