@extends('admin.master')


@section('main-content')

<form style="margin:80px auto;" method="POST"  class="was-validated" action="{{'/update-category'}}">
    <h2>Edit Form</h2>

 @csrf
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" value="{{$categoryById->name}}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Age" name="age" value="{{$categoryById->age}}" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="pwd">Salary:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Salary" name="salary" value="{{$categoryById->salary}}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Position:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Your Job Title" name="position" value="{{$categoryById->position}}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Location:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Your Location" name="location" value="{{$categoryById->location}}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Joining Date:</label>
        <input type="date" class="form-control" id="pwd" placeholder="Enter Your Location" name="joining" value="{{$categoryById->joining}}" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <input type="hidden" name="id" value="{{$categoryById->id}}">

    <button type="submit" class="btn btn-primary">Update!</button>
  </form>

@endsection
