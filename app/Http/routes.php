<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PortfolioController@index');
Route::get('about', 'PortfolioController@about');
Route::get('contact', 'PortfolioController@contact');
Route::get('blog', 'PortfolioController@blog_list');
Route::get('/blog/{post_id}', 'PortfolioController@blog_post');

Route::auth();

Route::get('/dashboard', 'MainController@index');

// Blog
Route::get('new_post', 'BlogController@new_post');
Route::post('blog/add_post', 'BlogController@add_post');
Route::get('display_posts', 'BlogController@index');
