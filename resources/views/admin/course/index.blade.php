
@extends('admin.master')

@section('main-content')
<section class="container">
<h2 class="text-center mt-5">Course List | <a class="btn btn-md btn-info" href="{{ route('course.create') }}">Add New Course</a></h2>
<h3 class="text-center text-success">{{Session::get('msg')}}</h3>
<table class="table table-dark table-striped table-bordered mt-5 ml-5 ">
    <thead>
      <tr>
        <th scope="col">Index</th>
        <th scope="col">Course Id</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Fees</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($courses as $course )

    <tbody>
      <tr>
        <th scope="row">{{++$i}}</th>
        <td>{{$course->CourseId}}</td>
        <td>{{$course->CourseName}}</td>
        <td>{{$course->CourseFee}}/-</td>
        <td><a href="{{ route('course.show',$course->id)}}"> View </a>|<a href="{{ route('course.edit',$course->id)}}"> Edit </a>  <form action="{{ route('course.destroy',$course->id)}}" method="POST">
            @csrf
            @method('DELETE')

           <Button class="btn btn-danger" type="submit">Delete</Button> </form></td>
      </tr>

    </tbody>
    @endforeach
  </table>
</section>
@endsection
