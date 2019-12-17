<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/create', 'ShirtController@front');
Route::post('/create/insert', 'ShirtController@goCreate');
Route::get('/create/insert', 'ShirtController@goCreate');
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', 'contactController@front');
Route::post('/contact/insert','contactController@goInsert');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login/process', 'LoginController@process');

Route::get('/register', 'LoginController@register');
Route::post('/register/process', 'LoginController@registerProcess');

/*==============================
Admin's Properties
==============================*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'ViewController@dashboard');
    Route::get('/dashboard/products', 'ViewController@front');

    Route::get('/dashboard/history', 'ViewController@hist');

    Route::get('/dashboard/contact', 'ViewController@contactadmin');

    Route::get('/dashboard/products/update/{id}', 'ShirtController@up');

    Route::post('/dashboard/products/update/{id}/process','ShirtController@goUpdate');

    Route::get('/dashboard/products/delete/{id}', 'ShirtController@delete');

    Route::get('/logout', 'LoginController@logout');
});
/*==============================
End of Admin's Properties
==============================*/
