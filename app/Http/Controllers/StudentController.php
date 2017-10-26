<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

  public function index(Request $request)
  {

    return view('student.index')->with([
      'name'=>session('name'),
      'email'=>session('email'),
      'comments'=>session('comments'),
      'lang'=>session('lang')
    ]);
  }

  public function store(Request $request)
  {
    //validation
    $this->validate($request, [
      'name' => 'required|regex:/^[\pL\s\-]+$/u',
      'email'=> 'required|email',
      'lang'=> 'required'
    ]);

    $name = $request->input('name');
    $email = $request->input('email');
    $comments = $request->input('comments');
    $lang = $request->input('lang');

    return redirect('/')->with([
      'name'=>$name,
      'email'=>$email,
      'comments'=>$comments,
      'lang'=>$lang
    ]);

  }

  //code for previous week, will delete later
  public function checkResults()
  {
    return 'We will check results later. Redirect to results will follow.';
    #redirect to results;
  }

public function showCountries()
{
  $countries = [
    'Canada',
    'Mexico',
    'USA',
    'Dominican Republic', 'Russia'
  ];

  return view ('student.countries')->with([
    'countries'=>$countries
  ]);
}

}
