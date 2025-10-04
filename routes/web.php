<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::view('/login', 'login');
Route::view('/admin', 'adminpanel.dashboard');
Route::view('/admin/elections', 'adminpanel.elections');
Route::view('/admin/candidates', 'adminpanel.candidates');
Route::view('/admin/positions', 'adminpanel.positions');
Route::view('/admin/users', 'adminpanel.voters');
Route::view('/admin/results', 'adminpanel.results');
Route::view('/admin/logs', 'adminpanel.logs');


