<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return 'Show form to collect all info from a student.';
    }

    public function checkAnswer()
    {
        return 'Will will check answer later. Redirect to results will follow.';
        #redirect to results;
    }
}
