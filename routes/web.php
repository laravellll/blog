<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|



php artisan make:controller name
php artisan serve
*/

Route::get('/blog','HomeController@blogpage')->name('x');
Route::get('/viewData','DashBoardController@viewData')->name('viewData');
Route::get('/order','HomeController@orderpage')->name('order');
Route::get('/dashboard','DashBoardController@Dashboard')->name('dashboard');
Route::get('/create','DashBoardController@create')->name('createForm');
Route::post('/dataCreate','DashBoardController@dataCreate');
Route::get('/blog-delete/{id?}','DashBoardController@delete')->name('blog-delete');
Route::get('/edit/{id?}','DashBoardController@edit')->name('edit');
Route::post('/dataUpdate','DashBoardController@dataUpdate');













