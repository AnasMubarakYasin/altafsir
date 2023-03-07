<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::middleware(['visitor.log', 'inertia'])->group(function () {
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
    Route::get('/panel/alquran', 'Panel\AlquranController')->name('web.panel.alquran.index');
    Route::get('/panel/alquran/surah', 'Panel\AlquranController')->name('web.panel.alquran.surah.index');
    Route::get('/panel/alquran/ayat', 'Panel\AlquranController@ayat')->name('web.panel.alquran.ayat.index');
    Route::get('/panel/alquran/tafsir', 'Panel\AlquranController@tafsir')->name('web.panel.alquran.tafsir.index');
    Route::get('/panel/analitycs/visitor', 'Panel\AnalitycController@visitor')->name('web.panel.analitycs.visitor.index');
    Route::get('/panel/analitycs/searcher', 'Panel\AnalitycController@searcher')->name('web.panel.analitycs.searcher.index');
    Route::get('/panel/users', 'Panel\DashboardController')->name('web.panel.users.index');
});
