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

Route::get('/', 'pageroutingController@homepage');

Route::get('/aboutus', 'pageroutingController@aboutus');

Route::get('/services', 'pageroutingController@services');

Route::get('/contact', 'MessageController@create');
Route::post('/contact', [
    'uses'=>'MessageController@store',
    'as' => 'contact.store'
]);


Route::get('/admin', 'pageroutingController@admin');

Route::get('/ARVR', 'pageroutingController@ARVR');

Route::get('/Web', 'pageroutingController@Web');

Route::get('/Seo', 'pageroutingController@Seo');

Route::get('/Mobile', 'pageroutingController@Mobile');

Route::get('/privacy', 'pageroutingController@privacy');

Route::post('/submit-contact', 'pageroutingController@submitContactForm');




//homepage 

//TODOS
Route::resource('todos', 'TodoController');
//post
Route::resource('posts', 'postsController');
//ourteam
Route::resource('ourteams', 'ourteamsController')->middleware('auth');

//testimonials
Route::resource('testimonial', 'testimonialsController')->middleware('auth');

//portfolio
Route::resource('portfolio', 'testimonialsController')->middleware('auth');

//clients
Route::resource('clients', 'clientsController')->middleware('auth');
//contact us message 
Route::resource('message', 'messageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
