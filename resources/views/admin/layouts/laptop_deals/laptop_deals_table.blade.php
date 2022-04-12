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
    <a href="{{ route('admin.add.deals') }}" class="btn btn-primary">Add Deals</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th>SL</th>
                <th>Offer Title</th>
                <th>Dealing Type</th>
                <th>Model</th>
                <th>Product Name</th>
                <th>Image</th>
                <th>Base Price</th>
                <th>Save Money</th>
                <th>Details</th>
                <th>Stock Quantity</th>
                <th>Stock status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $key=>$deal)
            <tr class="text-center">
                <td>{{ $key+1 }}</td>
                <td>{{ $deal->offer_title }}</td>
                <td>{{ $deal->type }}</td>
                <td>{{ $deal->model }}</td>
                <td>{{ $deal->product_name }}</td>
                <td><img src="{{ asset('uploads/laptop_deals/'.$deal->image) }}" alt="" style="height: 80px;width:80px;"></td>
                <td>{{ $deal->base_price }}</td>
                <td>{{ $deal->save_money }}</td>
                <td>{{ $deal->details }}</td>
                <td>{{ $deal->stock_quantity }}</td>
                <td>{{ $deal->stock_status }}</td>
                <td>
                    <a href="{{ route('admin.view.deals.image',$deal->id) }}" class="btn btn-success">View</a>
                    <a href="{{ route('admin.edit.deals',$deal->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.delete.deals',$deal->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection