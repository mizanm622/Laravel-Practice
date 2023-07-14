
@extends('admin.master')


@section('main-content')
<section class="container text-center">
    <h2>Manage product</h2>

<table  id="datatablesSimple" style="margin-left:100px;">
    <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Description</th>
            <th>Publication Status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
            $i=0;
        ?>
        @foreach($products as $product )

        <tr>
            <td>{{ ++$i}}</td>
            <td>{{$product->ProductName}}</td>
            <td>{{$product->ProductPrice}}/-</td>
            <td>{{$product->ProductCategory}}</td>
            <td>{{$product->ProductQuantity}}</td>
            <td><img src="{{$product->ProductImage}}" alt="Image" width="50px" height="50px"></td>
            <td>{{$product->ProductDescription}}</td>
            <td>{{$product->PublicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
            <td><a href="{{ url('/view-product/'.$product->id)}}"> View </a>|<a href="{{ url('/edit-product/'.$product->id)}}"> Edit </a> |<a href="{{ url('/delete-product/'.$product->id)}}"> Delete </a></td>
        </tr>
        @endforeach
    </tbody>

</table>

{{ Session::get('info')}}
<hr>
{{ $products->links() }}
</section>
@endsection


