<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return 'Show form to collect all info from a student.';
    }

    public function checkResults()
    {
        return 'We will check results later. Redirect to results will follow.';
        #redirect to results;
    }
}
