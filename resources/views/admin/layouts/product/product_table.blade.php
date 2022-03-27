@extends('admin.master')
@section('contents')
<!-- Added, Edit, Delete Message -->
@if(session()->has('error'))
<p class="alert alert-danger">{{ session()->get('error') }}</p>
@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif
<!-- end -->
<div class="table_button">
    <a href="{{ route('admin.add.product') }}" class="btn btn-primary">Add Product</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th scope="col">SL</th>
                <th scope="col">Model</th>
                <th scope="col">Name</th>
                <th scope="col">Regular Price</th>
                <th scope="col">Image</th>
                <th scope="col">Offer</th>
                <th scope="col">Product Description</th>
                <th scope="col">subCategory_id</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key=>$product)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td>{{ $product->model }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->regular_price }}</td>
                <td> <img src="{{ asset('/uploads/products/'.$product->product_image ) }}" style="width:80px;height:80px;"alt=""> </td>
                <td>{{ $product->product_offer }}</td>
                <td>{{ $product->product_description }}</td>
                <td>{{ $product->subCategory_id }}</td>
                <td>
                    <a href="{{ route('admin.view.product',$product->id) }}" class="btn btn-success">View</a>
                    <a href="{{ route('admin.edit.product',$product->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.delete.product',$product->id) }}" class="btn btn-danger">Delete</a>
                </td>               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection