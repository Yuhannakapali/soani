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

Route::get('/', [
    'uses'=>'pageroutingController@homepage',
    'as'=> 'userhomepage'
    ]);

Route::get('/aboutus', [
    'uses'=>'pageroutingController@aboutus',
    'as'=>'user.aboutus'
    ]);

Route::get('/services', [
    'uses'=>'pageroutingController@services',
    'as'=>'user.services'
]);

Route::get('/contact', 'messageController@create');
Route::post('/contact', [
    'uses'=>'messageController@store',
    'as' => 'contact.store'
]);

Route::get('/services/ARVR', [
    'uses'=> 'pageroutingController@ARVR',
    'as' => 'user.ARVR'
]);

Route::get('/services/WEB', [
    'uses' => 'pageroutingController@Web',
    'as' => 'user.WEB'
]);

Route::get('/services/SEO', [
    'uses' => 'pageroutingController@Seo',
    'as' => 'user.SEO'
]);

Route::get('/services/MOBILE', [
    'uses' => 'pageroutingController@Mobile',
    'as' => 'user.MOBILE'
]);


Route::get('/portfolio', [
    'uses' => 'pageroutingController@portfolio',
    'as' => 'user.portfolio'
]);

Route::get('/blog', [
    'uses' => 'pageroutingController@blog',
    'as' => 'user.blog'
]);

Route::get('/blog/{id}', [
    'uses'=>'pageroutingController@showblog',
    'as' => 'view.blog'

]);
Route::get('/category/{id}', [
    'uses' => 'pageroutingController@showblogbyCategory',
    'as'=> 'find.blogbycategory'
    ]);

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
//Blog
Route::resource('Blog', 'blogsController')->middleware('auth');
//Category
Route::resource('Category', 'categoryController')->middleware('auth');

Auth::routes(['register'=> false ]);
//logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');



