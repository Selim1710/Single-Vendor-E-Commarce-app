@extends('admin.master')
@section('contents')
<div class="myform">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Model</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product model">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1"> Regular Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product price">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Image</label>
            <input type="file" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Offer</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter product offer(if don't enter 0)">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sub-Category</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Product Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
</div>
@endsection