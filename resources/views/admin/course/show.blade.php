
@extends('admin.master')

@section('main-content')
<section class="container">
<h2 class="text-center mt-5">Single Course List| <a class="btn btn-md btn-info" href="{{ route('course.index') }}">View All Course</a></h2>

<table class="table table-dark table-striped table-bordered mt-5 ml-5 ">
    <thead>
      <tr>
        <th scope="col">Index</th>
        <th scope="col">Course Id</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Fees</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$course->id}}</th>
        <td>{{$course->CourseId}}</td>
        <td>{{$course->CourseName}}</td>
        <td>{{$course->CourseFee}}/-</td>

      </tr>
    </tbody>

  </table>
</section>
@endsection
