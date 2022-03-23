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
    <a href="{{ route('admin.add.subCategory') }}" class="btn btn-primary">Add Sub-Category</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Category id</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcategory as $key=>$sc)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td>{{ $sc->sub_category_name }}</td>
                <td>{{ $sc->category_id }}</td>
                <td>
                    <a href="{{ route('admin.edit.subCategory',$sc->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.delete.subCategory',$sc->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection