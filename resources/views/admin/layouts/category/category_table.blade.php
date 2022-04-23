@extends('admin.master')
@section('contents')
<!-- Message -->
@if(session()->has('error'))
<p class="alert alert-danger">{{ session()->get('error') }}</p>
@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif
<!-- end -->


<div class="table_button">
    <a href="{{ route('admin.add.category') }}" class="btn btn-primary">Add Category</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th>SL</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $key=>$cat)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td>{{ $cat->category_name }}</td>
                <td><img src="{{ asset('/uploads/category/'.$cat->image ) }}" style="width:80px;height:80px;" alt=""></td>
                <td>
                    <a href="{{ route('admin.view.category',$cat->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('admin.edit.category',$cat->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.delete.category',$cat->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection