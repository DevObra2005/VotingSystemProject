<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    // Handle the login request
    public function login(Request $request){

    // Validate the input fields
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Try login as admin first
    if (Auth::guard('web')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }

    // Try login as student
    if (Auth::guard('student')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('student.election_title');
    }

    // If both fail
    return back()->withErrors([
        'email' => 'Invalid email or password.',
    ]);
    }

    // Show the dashboard (only for logged-in users)
    public function adminDashboard()
    {
        // Example dummy data (later this will come from DB)
        $data = [
            'totalVoters' => 500,
            'activeElection' => 1,
            'completedElection' => 2,
            'upcoming' => 'SSLG Election 2025'
        ];

        return view('adminpanel.dashboard', compact('data'));
    }

    // Logout the user
    public function logout(Request $request)
    {
        if (Auth::guard('student')->check()) {
            Auth::guard('student')->logout();
        }

        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Successfully logged out!');
    }
}
?>
