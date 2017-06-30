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

Route::get('/', function () {
    return view('welcome');
});
/*


Route::get('/test/{name}', 'TestController@Test')->where(['name' => '[a-z1-5]+']);




Route::get('/html/{name}', function($name){

	echo "Je suis " . "$name ," . " je suis LE Handix";

});

Route::get('/handix','HandixController@newhandix');*/

Route::get('/dix','ContactController@newContact');

Route::get('/serv','ServiceController@Handix');

Route::get('/list','ServiceController@listServices');
