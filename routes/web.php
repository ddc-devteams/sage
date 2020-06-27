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

// Route::get('/', function () {
//     return view('fontend.index');
// });

Route::get('/', 'indexController@GetData')->name('index');
Route::get('/source', 'sourceController@GetData')->name('source');
Route::get('/history', 'historyController@GetData')->name('history');
Route::get('/poster', 'posterController@GetData')->name('poster');
Route::get('/caption', 'captionController@GetData')->name('caption');
Route::get('/gallery', 'galleryController@GetData')->name('gallery');
Route::get('/timeline', 'timelineController@GetData')->name('timeline');

Route::get('/admin', 'adminController@GetData')->name('admin');
Route::post('/InsertMenuHome', 'adminController@InsertMenuHome')->name('form.insertmenuhome');

Route::post('/insertAdvisor', 'adminController@InsertData')->name('form.insertadvisor');
Route::get('deleteAdvisor/{id}', 'adminController@DestroyAdvisor')->name('deleteAdvisor');

Route::post('/insertPoster', 'adminController@InsertPoster')->name('form.insertposter');
Route::get('deletePoster/{id}', 'adminController@DestroyPoster')->name('deletePoster');

Route::post('/insertCaption', 'adminController@InsertCaption')->name('form.insertcaption');
Route::get('deleteCaption/{id}', 'adminController@DestroyCaption')->name('deleteCaption');

Route::post('/insertGallery', 'adminController@InsertGallery')->name('form.insertgallery');
Route::get('deleteGallery/{id}', 'adminController@DestroyGallery')->name('deleteGallery');