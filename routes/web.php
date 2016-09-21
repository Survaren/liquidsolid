<?php

/**
* Authentication Routes
*/
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function() {
  return redirect()->to('login');
});

/**
* Authenticated Routes
*/
Route::group([
  'prefix' => 'app',
  'middleware' => ['auth']
], function () {

  /**
  * Dashboard Route
  */
  Route::get('dashboard', ['uses' => 'DashboardController@show', 'as' => 'dashboard']);
});
