<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tightenco\Ziggy\Ziggy;

Route::get('ziggy', fn () => response()->json(new Ziggy));

Route::withoutMiddleware('api')->middleware(['session', 'api'])->group(function () {
    Route::post('/entry/signin', 'Authc\UserController@api_signin')->name('api.entry.signin');
    Route::post('/entry/signup', 'Authc\UserController@api_signup')->name('api.entry.signup');
    Route::post('/entry/signout', 'Authc\UserController@api_signout')->name('api.entry.signout');
    Route::post('/panel/kategory', 'KategoryController@create_api')->name('api.panel.kategory');
});

Route::post('/surah', 'SurahController@create')->name('api.surah.create');
Route::patch('/surah/{surah}', 'SurahController@update')->name('api.surah.update');
Route::delete('/surah', 'SurahController@delete')->name('api.surah.delete');

Route::post('/ayat', 'AyatController@create')->name('api.ayat.create');
Route::patch('/ayat/{ayat}', 'AyatController@update')->name('api.ayat.update');
Route::delete('/ayat', 'AyatController@delete')->name('api.ayat.delete');

Route::post('/tafsir', 'AyatController@create')->name('api.tafsir.create');
Route::patch('/tafsir/{tafsir}', 'AyatController@update')->name('api.tafsir.update');
Route::delete('/tafsir', 'AyatController@delete')->name('api.tafsir.delete');

Route::post('/kategory', 'KategoryController@create_api')->name('api.kategory.create');
Route::patch('/kategory/{kategory}', 'KategoryController@update')->name('api.kategory.update');
Route::delete('/kategory', 'KategoryController@delete')->name('api.kategory.delete');
