@extends('admin.master')
@section('contents')

<div class="table_button text-center">
    <h1>Customer List</h1>
</div>
<!-- Message -->
@if(session()->has('error'))
<p class="alert alert-danger">{{ session()->get('error') }}</p>
@endif
@if(session()->has('message'))
<p class="alert alert-success">{{ session()->get('message') }}</p>
@endif
<!-- end -->
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>Address</th>
                <th>Disable</th>
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
                    @if($user->status != 'disabled')
                    <a href="{{ route('admin.ban.customer',$user->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    @else
                    <a href="{{ route('admin.un.ban.customer',$user->id) }}" class="btn btn-success"><i class="fa fa-check"></i></a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection