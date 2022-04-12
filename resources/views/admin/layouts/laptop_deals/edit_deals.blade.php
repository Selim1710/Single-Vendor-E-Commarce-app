@extends('admin.master')
@section('contents')
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

<div class="myform">
    <form action="{{ route('admin.update.deals',$deal->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Title"> Offer Title</label>
            <input type="text" name="offer_title" value="{{ $deal->offer_title }}" class="form-control" id="Title" required>
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" value="{{ $deal->model }}" class="form-control" id="model" required>
        </div>
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" value="{{ $deal->product_name }}" class="form-control" id="product_name" required>
        </div>
        <div class="form-group">
            <label for="base_price">Base Price</label>
            <input type="number" name="base_price" value="{{ $deal->base_price }}" class="form-control" id="base_price" required>
        </div>
        <div class="form-group">
            <label for="save_money">Save Money</label>
            <input type="number" name="save_money" value="{{ $deal->save_money }}" class="form-control" id="save_money" required>
        </div>
        <div class="form-group">
            <label for="stock_quantity">Stock Quantity</label>
            <input type="number" name="stock_quantity" value="{{ $deal->stock_quantity }}" class="form-control" id="stock_quantity" required>
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea name="details" class="form-control" id="details" required>{{ $deal->details }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Now</button>
    </form>
</div>
@endsection