<?php

use Illuminate\Support\Facades\Route;

// Landing Page Route
Route::get('/', function () {
    return view('landingpage');
});


// For admin login routes
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// For admin logout Routes
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Admin Panel Routes
Route::view('/admin/elections', 'adminpanel.elections');
Route::view('/admin/candidates', 'adminpanel.candidates');
Route::view('/admin/positions', 'adminpanel.positions');
Route::get('/admin/users', function () {
    $data = [
        'totalVoters' => 1200,
        'id'=> '2021001',
        'name' => 'Alyssa Shane Refugia',
        'grade' => '12',
        'section' => 'A',
        'id2'=> '2022001',
        'name2' => 'Ryzza Sebido',
        'grade2' => '12',
        'section2' => 'B',
    ];
    return view('adminpanel.voters', compact('data'));
});
Route::view('/admin/results', 'adminpanel.results');
Route::view('/admin/logs', 'adminpanel.logs');


