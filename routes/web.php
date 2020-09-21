<?php

use Illuminate\Support\Facades\Route;


//Blog ROutes
Route::group(['namespace' => 'Blog'], function ()
{
    Route::get('/', 'HomeController@index');
    Route::get('/post','PostController@index')->name('post');


    
});







//Admin Routes
Route::group(['namespace' => 'Admin'], function () 
{
   
    Route::get('admin/home', 'HomeController@index')->name('admin.home');

    //Post Route
   
    Route::resource('admin/post', 'PostController');
    //Tag route
    Route::resource('admin/tag', 'TagController');
    //category Route
    Route::resource('admin/category', 'CategoryController');


    //Users Route
    Route::resource('admin/user', 'UserController');
    
    
    
    
});






