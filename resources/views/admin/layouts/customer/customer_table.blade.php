@extends('admin.master')
@section('contents')

<div class="table_button text-center">
    <h1>Customer List</h1>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th>Name</th> 
                <th>email</th>
                <th>phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="text-center">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection