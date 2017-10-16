@extends('layouts.master')


@section('title')
    Language School
@endsection


@push('head')
    <link href="/css/student/contactUs.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
  <form>
    <fieldset>
      <legend>Contact Us</legend>
      <p>
        <label for="name" class="category">Your Name:</label>
        <input name="name" type="text" size="32" id="name" value='' autofocus>
        <span class="reqMsg" id="nameSpn"> (Required)</span>
      </p>

      <p>
        <label for="email" class="category"> Your Email:</label>
        <input name="email" type="email" id="email" size="32" value=''>
        <span class="reqMsg" id="emailSpn"> (Required)</span>
      </p>

      <p>
        <label for="langId" class="category">Language to Learn:</label>
        <select name="lang" id="langId">
          <option value='choose' selected>Select</option>
          <option value='Russian'>Russian</option>
          <option value='English'>English</option>
          <option value='French'>French</option>
          <option value='Italian'>Italian</option>
        </select><span class="reqMsg" id="langSpn"> (Required)</span>
      </p>

      <p>
        <label for="comments" class="category">Comments: </label><br />
        <textarea name="comments" cols="60" rows="6" id="comments" placeholder="Additional Info"></textarea>
      </p>

      <input type="submit" value="Submit" />

    </fieldset>
  </form>
@endsection
