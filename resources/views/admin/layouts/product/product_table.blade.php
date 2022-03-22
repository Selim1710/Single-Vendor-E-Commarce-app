@extends('admin.master')
@section('contents')

<div class="table_button">
    <a href="{{ route('admin.add.product') }}" class="btn btn-primary">Add Product</a>
</div>
<div class="manage_table">
    <table class="table table-borderless table-hover">
        <thead class="table-primary">
            <tr class="text-center">
                <th scope="col">SL</th>
                <th scope="col">Model</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Offer</th>
                <th scope="col">Regular Price</th>
                <th scope="col">Product Description</th>
                <th scope="col">category_id</th>
                <th scope="col">subCategory_id</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr class="text-center">
                <td>1</td>
                <td>computert</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>special desktop</td>
                <td>1</td>
                <td style="width:6%;">Due to the widespread use of tables across third-party widgets like calendars and date pickers, we’ve designed our tables to be opt-in. Just add the base class .table to any, then extend with custom styles or our various included modifier classes.</td>
                <td>10</td>
                <td>10</td>
                <td>
                    <a href="#" class="btn btn-success">View</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>               
            </tr>
        </tbody>
    </table>
</div>
@endsection