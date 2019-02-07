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





// Route::get('/', function () {
//     return view( 'welcome');
// });

Route::get('/', function () {
    return view( 'sdghome');
});




Auth::routes();




Route::get('logout', 'UserController@logout');

Route::get('/sdghome', 'sdghomeController@index');
Route::get('/editgoal/{id}', 'TodoGoalController@edit');
Route::get('/update', 'TodoGoalController@update');


Route::resource('todogoals','TodoGoalController')->middleware('auth');




// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sdghome', 'sdghomeController@index')->name('sdghome');


