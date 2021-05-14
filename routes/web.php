<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/news/get', 'App\Http\Controllers\NewsController@store')->name('news.get');
//Route::get('/news', 'App\Http\Controllers\NewsController@getNews');

Route::get('/message/store', 'App\Http\Controllers\NewsController@store');
Route::get('/message/index', 'App\Http\Controllers\NewsController@index');

Route::get('/message/send', 'App\Http\Controllers\MessageController@message')->name('message.send');

Route::get('/api', 'App\Http\Controllers\GetMessageController@conectAPI');



