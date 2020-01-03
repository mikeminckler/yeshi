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

Route::get('ingredients/original', 'IngredientsController@original')->name('ingredients-original');
Route::get('ingredients/ginger', 'IngredientsController@ginger')->name('ingredients-ginger');
Route::get('ingredients/chili', 'IngredientsController@chili')->name('ingredients-chili');
Route::get('ingredients/chipotle', 'IngredientsController@chipotle')->name('ingredients-chipotle');

Auth::routes();
