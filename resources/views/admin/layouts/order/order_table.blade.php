@extends('admin.master')
@section('contents')
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary text-capitalize">
            <tr class="text-center">
                <th>customer id</th>
                <th>Name</th>          
                <th>Email</th>
                <th>Phone</th>
                <th>Product id</th>
                <th>Name</th>
                <th>Model</th>
                <th>Price</th>
                <th>Offer</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="text-center">
                <td>{{ $order->customer_id }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->model }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->offer }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->total }}</td>
                <td>
                    <a href="#" class="btn btn-success">Accept</a>
                    <a href="#" class="btn btn-danger">Reject</a>
                </td>               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection