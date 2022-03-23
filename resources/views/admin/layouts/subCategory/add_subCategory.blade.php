@extends('admin.master')
@section('contents')
<div class="myform">
    <form>
        <div class="form-group">
            <label for="sun1">Sub-Category Name</label>
            <input type="text" name="sub_category_name" class="form-control" id="sun1" placeholder="Enter Subcategory Name" required>
        </div>
        <div class="form-group">
            <label for="cni1">Category Name</label>
            <select class="form-control" id="cni1">
                @foreach($subCategories as $subcategory)
                <option value="{{ $subcategory->category_id }}">{{ $subcategory->category_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Now</button>

    </form>
</div>
@endsection