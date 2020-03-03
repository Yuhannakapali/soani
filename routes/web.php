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

Route::get('/contact', 'messageController@create');
Route::post('/contact', [
    'uses'=>'messageController@store',
    'as' => 'contact.store'
]);


Route::get('/admin', 'pageroutingController@admin');

Route::get('/ARVR', 'pageroutingController@ARVR');

Route::get('/WEB', 'pageroutingController@Web');

Route::get('/SEO', 'pageroutingController@Seo');

Route::get('/MOBILE', 'pageroutingController@Mobile');

Route::get('/privacy', 'pageroutingController@privacy');

Route::get('/portfolio', 'pageroutingController@portfolio');

Route::get('/blog', 'pageroutingController@blog');

Route::get('/blog/{id}', [
    'uses'=>'pageroutingController@showblog',
    'as' => 'view.blog'

]);
Route::get('/test', 'pageroutingController@test');





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
Route::resource('Portfolio', 'portfoliosController')->middleware('auth');

//clients
Route::resource('clients', 'clientsController')->middleware('auth');
//contact us message 
Route::resource('message', 'messageController')->middleware('auth');

Route::resource('Blog', 'blogsController')->middleware('auth');

Auth::routes();
//logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');



