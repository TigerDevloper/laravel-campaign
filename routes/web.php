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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/campaign', 'CampaignController@index')->name('campaign');
Route::resource('user', 'UserController');
Route::get('campaign/channel/{id}', 'CampaignController@channel');
Route::post('campaign/channel/add/{id}', 'CampaignController@addchannel');
Route::get('campaign/channel/edit/{camp_id}/{chan_id}', 'CampaignController@editchannel');
Route::post('campaign/channel/save/{camp_id}/{chan_id}', 'CampaignController@savechannel');
Route::post('campaign/channel/delete/{id}', 'CampaignController@deletechannel');
Route::get('campaign/preview/{id}', 'CampaignController@preview');

Route::get('campaign/channel/assign/{ch_id}', 'CampaignController@assign');

Route::resource('campaign', 'CampaignController');

Route::resource('channel', 'ChannelController');
Route::resource('subchannel', 'SubChannelController');
Route::resource('user', 'UserController');


