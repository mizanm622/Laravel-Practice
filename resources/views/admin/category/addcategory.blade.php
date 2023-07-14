@extends('admin.master')



@section('main-content')



<form style="margin:80px auto;" method="POST"  class="was-validated" action="{{'/save-category'}}">
    <h2>Input Form</h2>
    {{ Session::get('msg')}}
 @csrf
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Age" name="age" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="pwd">Salary:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Salary" name="salary" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Position:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Your Job Title" name="position" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Location:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Your Location" name="location" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
