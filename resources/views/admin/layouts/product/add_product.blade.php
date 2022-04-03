@extends('admin.master')
@section('contents')
<div class="myform">
    <!-- Validation Error Message -->
    <div class="message">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <form action="{{ route('admin.store.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="m1">Model</label>
            <input type="text" name="model" class="form-control" id="m1" placeholder="Enter product model" required>
        </div>
        <div class="form-group">
            <label for="pn1">Product Name</label>
            <input type="text" name="product_name" class="form-control" id="pn1" placeholder="Enter product name" required>
        </div>
        <div class="form-group">
            <label for="rp1"> Regular Price</label>
            <input type="number" name="regular_price" class="form-control" id="rp1" placeholder="Enter product price" required>
        </div>
        <div class="form-group">
            <label for="img1">Image</label>
            <input type="file" accept="image/*" name="product_image" class="form-control" id="img1" required>
        </div>
        <div class="form-group">
            <label for="o1">Offer</label>
            <input type="number" name="product_offer" class="form-control" id="o1" placeholder="Enter product offer(if don't enter 0)" required>
        </div>
        <div class="form-group">
            <label for="sc1">Sub-Category</label>
            <select class="form-control" id="sc1" name="subCategory_id">
                @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->sub_category_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pd1">Product Description</label>
            <textarea name="product_description" class="form-control" id="pd1" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Now</button>

    </form>
</div>
@endsection