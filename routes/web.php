<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::middleware('inertia')->group(function () {
    Route::get('/', 'IndexController')->name('web.index');
    Route::get('/result', 'IndexController@result')->name('web.result');    

    Route::get('/', 'IndexController')->name('web.detail-surah');
});

Route::middleware(['larasar.guest:web,web.panel.index', 'larasar.inertia'])->group(function () {
    Route::get('/entry', 'Authc\UserController@web_entry')->name('web.entry.index');
    Route::get('/entry/signin', 'Authc\UserController@web_signin')->name('web.entry.signin');
    Route::get('/entry/signup', 'Authc\UserController@web_signup')->name('web.entry.signup');
});
Route::middleware(['larasar.authc:web,web.entry.index', 'larasar.inertia'])->group(function () {
    Route::redirect("/panel", "/panel/dashboard")->name('web.panel.index');
    Route::get('/panel/dashboard', 'Panel\DashboardController')->name('web.panel.dashboard');
    Route::get('/panel/alquran', 'Panel\Alquran')->name('web.panel.alquran.index');
    Route::get('/panel/alquran/surah', 'Panel\Alquran@surah')->name('web.panel.alquran.surah.index');
    Route::get('/panel/alquran/ayat', 'Panel\Alquran@ayat')->name('web.panel.alquran.ayat.index');
    Route::get('/panel/users', 'Panel\DashboardController')->name('web.panel.users.index');
});
