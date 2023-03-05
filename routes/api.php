<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tightenco\Ziggy\Ziggy;

Route::get('ziggy', fn () => response()->json(new Ziggy));

Route::withoutMiddleware('api')->middleware(['session', 'api'])->group(function () {
    Route::post('/entry/signin', 'Authc\UserController@api_signin')->name('api.entry.signin');
    Route::post('/entry/signup', 'Authc\UserController@api_signup')->name('api.entry.signup');
    Route::post('/entry/signout', 'Authc\UserController@api_signout')->name('api.entry.signout');
});

Route::post('/surah', 'SurahController@create')->name('api.surah.create');
Route::patch('/surah/{surah}', 'SurahController@update')->name('api.surah.update');
Route::delete('/surah', 'SurahController@delete')->name('api.surah.delete');

Route::post('/ayat', 'AyatController@create')->name('api.ayat.create');
Route::patch('/ayat/{ayat}', 'AyatController@update')->name('api.ayat.update');
Route::delete('/ayat', 'AyatController@delete')->name('api.ayat.delete');
