@extends('admin.master')
@section('contents')
<div class="myform">
    <form action="{{ route('admin.update.product',$product->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="m1">Model</label>
            <input type="text" name="model" value="{{ $product->model }}" class="form-control" id="m1" placeholder="Enter product model" required>
        </div>
        <div class="form-group">
            <label for="pn1">Product Name</label>
            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" id="pn1" placeholder="Enter product name" required>
        </div>
        <div class="form-group">
            <label for="rp1"> Regular Price</label>
            <input type="number" name="regular_price" value="{{ $product->regular_price }}" class="form-control" id="rp1" placeholder="Enter product price" required>
        </div>
        <div class="form-group">
            <label for="o1">Offer</label>
            <input type="number" name="product_offer" value="{{ $product->product_offer }}" class="form-control" id="o1" placeholder="Enter product offer(if don't enter 0)" required>
        </div>
        <div class="form-group">
            <label for="pd1">Product Description</label>
            <textarea name="product_description" class="form-control" id="pd1" rows="3" required>{{ $product->product_description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Now</button>
    </form>
</div>
@endsection