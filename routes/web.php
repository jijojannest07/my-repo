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

Route::get('test','ChannelController@index');

Route::get('/', function () {
    return view('welcome');
});
Route::post('/test/send','ChannelController@send',function(){
    return "Data has been sent!";
})->name('trigger');

Route::get('/test/send',function(){
    return redirect()->to('/test');
});
