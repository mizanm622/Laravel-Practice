@extends('admin.master')


@section('main-content')

<form style="margin:80px auto;" method="POST"  class="was-validated" action="{{route('course.store')}}">
    <h2>Create Course</h2>

 @csrf
    <div class="form-group">
      <label for="uname">Course Name:</label>
      <input type="text" class="form-control" id="cname" placeholder="Course Name" name="CourseName"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Course ID:</label>
      <input type="text" class="form-control" id="cid" placeholder="Course ID" name="CourseId" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="pwd">Course Fee:</label>
        <input type="text" class="form-control" id="cf" placeholder="Course Fee" name="CourseFee" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
