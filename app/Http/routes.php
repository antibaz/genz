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

Route::get('/', function () {
    return view('home');
});


/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';

/* ================== Modal Routes ================== */
Route::get('/modal/', 'ModalController@index');

/* ================== Articles Routes ================== */
Route::any('/vk/message', "VkMessageController@index");
Route::get('/comments/', "CommentsController@index");
Route::get('/{slug}/{slug2?}', 'ArticleController@index');
#Route::get('/новости/{slug2?}', 'NewsController@index');
#Route::get('/test/', 'TestController@index');


