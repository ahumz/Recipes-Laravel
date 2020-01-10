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
    return view('welcome');
});

Route::get('recipes', 'RecipeController@index')->name('resep.index');
Route::get('recipes/detail/{id}', 'RecipeController@resepdetail')->name('resep.detail');
Route::get('about', 'RecipeController@about')->name('resep.about');
Route::get('contact', 'RecipeController@contact')->name('resep.contact');

Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/dashboard/create', 'AdminController@create')->name('resep.create');
Route::post('/dashboard/store', 'AdminController@store')->name('resep.store');
Route::put('/dashboard/update/{id}', 'AdminController@update')->name('resep.update');
Route::get('/dashboad/edit/{id}', 'AdminController@edit')->name('resep.edit');
Route::delete('/dashboad/delete/{id}', 'AdminController@destroy')->name('resep.delete');

//ubah template by admin
Route::get('/template/logo', 'AdminController@logo')->name('admin.logo');
Route::post('/template/logostore', 'AdminController@logostore')->name('logo.store');

Route::get('/resep', 'RecipeController@dashboard')->name('resep.dashboard');

Route::get('/users', 'UserController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
