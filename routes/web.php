<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;

// Landing Page for Students
Route::get('/', function () {
    return view('landingpage');
});

// LOGIN + LOGOUT
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Student Dashboard Routes (AUTH Not Protected Temporarily)
Route::get('/student/dashboard', [StudentController::class, 'electionTitle'])
    ->name('student.election_title');
Route::view('/student/cast_votes', 'student.cast_votes')
    ->name('student.cast_votes');

// Admin Dashboard Routes (Protected by auth:web(admin))
Route::middleware('auth:web')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'adminDashboard'])->name('dashboard');
    // Admin Dashboard Routes
    Route::view('/admin/elections', 'adminpanel.elections')
        ->name('adminpanel.elections');
    Route::view('/admin/candidates', 'adminpanel.candidates')
        ->name('adminpanel.candidates');
    Route::view('/admin/positions', 'adminpanel.positions')
        ->name('adminpanel.positions');
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
    Route::view('/admin/results', 'adminpanel.results')
        ->name('adminpanel.results');
    Route::view('/admin/logs', 'adminpanel.logs')
        ->name('adminpanel.logs');
});

?>
