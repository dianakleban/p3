<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function create(Request $request)
    {
      //dump(session('name'));
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
      //str_replace(' ', '', $value)
      //$newName = str_replace(' ', '',$request->input('name'));
    //dump($newName);
      $this->validate($request, [
        'name' => 'required|alpha|min:2',
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
    /*public function index()
    {
        return view('student.index');
    }*/

    //code for previous week, will delete later
    public function checkResults()
    {
        return 'We will check results later. Redirect to results will follow.';
        #redirect to results;
    }


}
