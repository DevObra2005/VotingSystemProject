<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function electionTitle()
    {
        $title = "Supreme Student Learner Council Election 2025";

        return view('student.student_dashboard', compact('title'));
    }
    
}
