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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Route::get('/hello',function(){
//         return 'Hello world';
// });
Route::get('/users/{id}',function($id=1){
        return 'users' . $id;
});
Route::get('/index','HomeController@index');