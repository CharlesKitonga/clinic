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

Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//front page routes
Route::get('/', 'PagesController@Index');
Route::get('/about-us', 'PagesController@About');
Route::get('/services', 'PagesController@Services');
Route::match(['get','post'],'/testimonials', 'PagesController@Testimonials');
Route::get('/faq', 'PagesController@Faq');
Route::get('/gallery', 'PagesController@Gallery');
Route::get('/treatment-single', 'PagesController@Treatment');
Route::get('/blog-default', 'PagesController@Blogs');
Route::get('/blog-single', 'PagesController@Blog');
Route::match(['get','post'], '/contact-us','PagesController@Contact');
//admin logout route
Route::get('/admin-logout', 'PagesController@logout');

//rendering vue routes to the web
Route::get('{path}', 'HomeController@index')->where('path','([A-z\d-\/_.]+)?');
