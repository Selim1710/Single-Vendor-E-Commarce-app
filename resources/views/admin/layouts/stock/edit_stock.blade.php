@extends('admin.master')
@section('contents')
<div class="myform">
    <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Product Name</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Total Produce</label>
            <input type="number" name="total_produce" value="" class="form-control" id="exampleFormControlInput1" placeholder="Enter quantity">
        </div>
    </form>
</div>
@endsection