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

Route::get('/', 'PagesController@welcome');

Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/reservation', 'PagesController@reservation');
Route::get('/arbours', 'PagesController@arbours');

Route::get('/albums', 'PagesController@albums');
Route::get('/photos', 'PagesController@photos');
Route::get('/photos/{albumId}', 'PagesController@photosAlbum');
Route::get('/videos', 'PagesController@videos');

// 4 page but same structure
Route::get('/numbers/{type}', 'PagesController@cottages');
Route::get('/number/{id}', 'PagesController@cottage');
// 4 page but same structure

Route::post('/question-form', 'PagesController@form_question');
Route::post('/reservation-form', 'PagesController@form_reservation');


//Route::get('/houses', 'PagesController@houses');
//Route::get('/house/{house}', 'PagesController@house');
//
//Route::get('/saunas', 'PagesController@saunas');
//Route::get('/sauna/{sauna}', 'PagesController@sauna');
//
//Route::get('/baths', 'PagesController@baths');
//Route::get('/bath/{bath}', 'PagesController@bath');
//
//Route::get('/arbours', 'PagesController@arbours');
//Route::get('/arbour/{arbour}', 'PagesController@arbour');

Route::get('/news', 'NewsController@index');
Route::get('/news/{news}', 'NewsController@post');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});