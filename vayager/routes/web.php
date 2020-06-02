<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


/* Route::get('/hello',function(){
         return 'Hello world';
 });
 */
Route::get('/users/{id}', function ($id = 1) {
    return 'users' . $id;
});
Route::get('/index', 'HomeController@index');

Route::resource('items', 'ItemController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shops/additem/{item}', 'ShopController@addItem');
Route::get('/shops/updateitem/{item}/{qty}', 'ShopController@updateitem');
Route::get('/shops/removeitem/{item}', 'ShopController@removeItem');
Route::get('/shops/getcontent', 'ShopController@getContent');


Route::get('/sessions/save', 'Homecontroller@saveSession');
Route::get('/sessions/get', 'Homecontroller@getSession');
Route::get('/sessions/push', 'Homecontroller@pushSession');
Route::get('/sessions/all', 'Homecontroller@allSession');
Route::get('/sessions/flash', 'Homecontroller@flashSession');
Route::get('/sessions/has', 'Homecontroller@hasSession');
Route::get('/sessions/forget', 'Homecontroller@forgetSession');
Route::get('/urls/prev', url('/urls/full'));
Route::get('/urls/full', 'Homecontroller@fullUrl');
