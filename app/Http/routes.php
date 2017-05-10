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
use App\Http\Controllers\DoExamController;


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/doExam', 'DoExamController@doexam');

Route::get('meo', "WelcomeController@toMeo");

Route::get('bienbao', "WelcomeController@toBienBao");
		
Route::post('/doExam', 'DoExamController@showresults');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
