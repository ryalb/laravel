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

Route::get('/', function () { return view('welcome'); })->middleware('auth');

Route::get('/poker', function () { return view('poker/index'); });
Route::get('/poker/session/add', 'PokerController@addSession')->middleware('auth');
Route::get('/poker/session/create', 'PokerController@createSession')->middleware('auth');
Route::get('/poker/session/list', 'PokerController@listSession')->middleware('auth');
Route::get('/poker/session/show', 'PokerController@showSession')->middleware('auth');
Route::get('/poker/session/{id}/join', 'PokerController@joinSession')->middleware('auth');
Route::get('/poker/session/{id}/story/add', 'PokerController@addStory')->middleware('auth');
Route::get('/poker/session/{id}/story/create', 'PokerController@createStory')->middleware('auth');
Route::get('/poker/session/{id}/story/finish', 'PokerController@finishStory')->middleware('auth');
//Route::get('/poker/session/{id}/story/{id}/round/add', 'PokerController@addRound')->middleware('auth');
//Route::get('/poker/session/{id}/story/{id}/round/${id}/stop', 'PokerController@stopRound')->middleware('auth');
//Route::get('/poker/session/{id}/story/{id}/round/${id}/set', 'PokerController@setRound')->middleware('auth');

Route::get('/retro/list', 'RetroController@listAll');

Route::get('/retro/add', function () {
    return view('retro/add');
});
Route::get('/retro', function () {
    return view('retro/index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
