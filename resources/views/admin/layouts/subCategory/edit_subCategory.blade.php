@extends('admin.master')
@section('contents')
<div class="myform">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Sub-Category Name</label>
            <input type="text" name="subCategory_name" value="" class="form-control" id="exampleFormControlInput1" placeholder="Enter Subcategory Name" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category Name</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option value="">1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Now</button>

    </form>
</div>
@endsection