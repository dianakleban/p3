<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function checkResults()
    {
        return 'We will check results later. Redirect to results will follow.';
        #redirect to results;
    }

    /*public function show($title = null)
    {
    	dump($title);
    	return view('student.index')->with(['title'=>$title]);
    }*/

}
