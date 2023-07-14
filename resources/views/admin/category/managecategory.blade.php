@extends('admin.master')


@section('main-content')
<section class="container text-center">
Total:{{$categories->count()}}


<table  id="datatablesSimple">
    <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Position</th>
            <th>Office</th>
            <th>Start date</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;
        ?>
        @foreach($categories as $category )
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->age}}</td>
            <td>{{$category->salary}}</td>
            <td>{{$category->position}}</td>
            <td>{{$category->location}}</td>
            <td>{{$category->joining}}</td>
            <td><a href="{{ url('/edit-category/'.$category->id)}}"> Edit </a> |<a href="{{ url('/delete-category/'.$category->id)}}"> Delete </a></td>
        </tr>
        @endforeach
    </tbody>


</table>
{{ Session::get('info')}}
<hr>
{{ $categories->links() }}
</section>
@endsection
