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
    return view('home');
});

Route::get('/vessel', function () {
    return view('vessel');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/user', function () {
    return view('userprofile');
});

Route::get('report/trending', function (){
    return view('trending');
});

Route::get('/api/trend/{vessel?}/{engine?}/{channel?}/{from?}/{to?}', 'MonitoringController@trending');
Route::get('/api/vessel/list', 'VesselController@list');

Route::get('/api/channel/list/{engineId?}', 'ChannelController@list');
Route::get('/api/channel/{channelId?}', 'ChannelController@get');