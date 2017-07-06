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

Route::get('/', 'PagesController@home')->name('home');
Route::get('flavours', 'PagesController@flavours')->name('flavours');
Route::get('recipes', 'PagesController@recipes')->name('recipes');
Route::get('health-benefits', 'PagesController@healthBenefits')->name('health-benefits');
Route::get('contact', 'PagesController@contact')->name('contact');

Auth::routes();

