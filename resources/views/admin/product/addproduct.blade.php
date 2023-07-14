@extends('admin.master')


@section('main-content')

<h2>Add product</h2>

<form style="margin:80px auto;" method="post" enctype="multipart/form-data"  class="was-validated" action="{{'/save-product'}}">
    <h2>Input Form</h2>
    {{ Session::get('msg')}}
 @csrf
    <div class="form-group">
      <label for="uname">Product Name:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter product name" name="ProductName" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Product ID:</label>
      <input type="text" class="form-control" id="pid" placeholder="Enter ID" name="ProductId" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
        <label for="pwd">Category:</label>
        <select type="text" class="form-control" id="pcg"  name="ProductCategory" required>Select Product Category
            <option value="Samsung">Samsung</option>
            <option value="Realme">Realme</option>
            <option value="OPPO">OPPO</option>
            <option value="VIVO">VIVO</option>
            <option value="Apple">Apple</option>
            <option value="INFINIX">INFINIX</option>

        </select>

      </div>
    <div class="form-group">
        <label for="pwd">Price:</label>
        <input type="number" class="form-control" id="pp" placeholder="Price" name="ProductPrice" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Quantity:</label>
        <input type="number" class="form-control" id="pqt" placeholder="Quantity" name="ProductQuantity" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Publication Status:</label>
        <input type="text" class="form-control" id="pst" placeholder="Publication Status" name="PublicationStatus" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Product Image:</label>
        <input type="file" class="form-control" id="pimg" placeholder="Upload Image" name="ProductImage" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="pwd">Product Description:</label>
        <textarea name="ProductDescription" id="pds" cols="30" rows="10"></textarea>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
