<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('before' => ''), function(){
    Route::controller('filemanager', 'FilemanagerLaravelController');
});




Route::get('/', function()
{
   // return "jj";
    	return View::make('hello');
});

Route::controller('admin', 'AdminController');

Route::resource('user', 'UsersController');
Route::resource('session', 'SessionsController');
Route::resource('article', 'ArticlesController');
Route::resource('type', 'TypesController');
Route::resource('keyword', 'KeywordsController');
Route::resource('slider', 'SlidersController');
Route::resource('navigation', 'NavigationsController');







Route::group(array('before' => 'auth'), function()
    {
            \Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
        \Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
        
        \Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');
    });
