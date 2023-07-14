@extends('admin.master')


@section('main-content')

<section class="container text-center">
    <table class="table table-bordered table-dark table-hover m-auto">
        <thead >
            <tr>
                <th>
                    <td> <img src="{{asset($productById->ProductImage)}}" alt="Logo" class="img-responsive img-rounded"></td>
                </th>

            </tr>
        </thead>
        <tbody>
            <tr><td> Name</td> : <td>{{$productById->ProductName}}</td> </tr>
            <tr><td> Price</td> : <td>{{$productById->ProductPrice}}/-</td> </tr>
            <tr><td> Quantity</td> : <td>{{$productById->ProductQuantity}}</td> </tr>
            <tr><td> Publication</td> : <td>{{$productById->PublicationStatus == 1 ? 'Published':'Unpublished'}}</td> </tr>
            <tr><td> Description</td> : <td>{{$productById->ProductDescription}}</td> </tr>
        </tbody>
    </table>


</section>
@endsection


