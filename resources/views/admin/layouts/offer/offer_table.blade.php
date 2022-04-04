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
    <a href="{{ route('admin.add.offer') }}" class="btn btn-primary">Add Offer</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <tr class="text-center">
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
           
        </tbody>
    </table>
</div>
@endsection