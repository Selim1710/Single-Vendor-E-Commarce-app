<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('website/css/profile.css') }}">

    <title>user profile</title>
</head>

<body class="bg-dark">
    <section class="user-profile text-white">
        <div class="container">
            <h1 class="text-center pt-3 text-capitalize">{{ $user->name }}<br></h1>
            <!-- Message -->
            @if(session()->has('error'))
            <p class="alert alert-danger text-center">{{ session()->get('error') }}</p>
            @endif
            @if(session()->has('message'))
            <p class="alert alert-success text-center">{{ session()->get('message') }}</p>
            @endif
            <!-- end -->
            <div class="edit-profile text-right">
                <a href="{{ route('user.edit.profile',$user->id) }}" class="btn btn-secondary">Edit profile</a>
                <a href="{{ route('user.logout') }}" class="btn btn-danger">Logout</a>
            </div>
            <!-- user image -->
            <div class="user-image mt-2">
                <img src="{{ asset('website/images/emp.jpg') }}" alt="#" class="img-fluid" style="border:2px solid red;">
            </div>
            <div class="change-image mt-2">
                <a href="#" class="btn btn-primary">Change</a>
            </div>


            <!-- user detalis -->
            <div class="user-details mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            <h4>User Details</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            <h5>Order-List</h5>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                            <h5>Mycart <span class="badge badge-secondary">{{ session()->has('cart') ? count(session()->get('cart')):0 }}</span></h5>
                        </a>
                    </li>
                </ul>
                <!-- User details -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active mt-2" id="home" role="tabpanel" aria-labelledby="home-tab">
                        E-mail: {{ $user->email }}<br>
                        Address: {{ $user->address }}<br>
                    </div>
                    <!-- product order -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table border table-responsive">
                            <thead>
                                <th>SL</th>
                                <th>Product-id</th>
                                <th>Model</th>
                                <th>Name</th>
                                <th>Unit-Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Sub-total</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0</td>
                                    <td>1010</td>
                                    <td>Due to the widespread use of tables across third-party</td>
                                    <td>computer</td>
                                    <td>35000</td>
                                    <td>15</td>
                                    <td>15620000</td>
                                    <td>15620000</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- mycart -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="button-group mt-2 mb-2">
                            <a href="{{ route('user.checkout') }}" class="btn btn-success">
                                Checkout
                            </a>
                            <a href="{{ route('clear.cart') }}" class="btn btn-danger">
                                Clear All
                            </a>
                        </div>
                        <table class="table border table-responsive">
                            <thead>
                                <th>Product-id</th>
                                <th>Model</th>
                                <th>Name</th>
                                <th>Unit-Price</th>
                                <th>Offers</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Sub-total</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @if(!empty($carts))
                                @foreach($carts as $key=>$cart)
                                <tr>
                                    <td>{{ $cart['product_id']}}</td>
                                    <td>{{ $cart['product_model'] }}</td>
                                    <td>{{ $cart['product_name'] }}</td>
                                    <td>{{ $cart['regular_price'] }}</td>
                                    <td>{{ $cart['product_offer'] }} %</td>
                                    <td>{{ $cart['product_quantity'] }}</td>
                                    <td>{{ $cart['regular_price'] * $cart['product_quantity'] }}</td>
                                    <td>{{ $cart['regular_price'] * $cart['product_quantity'] * ($cart['product_offer']/100) }}</td>
                                    <td>
                                        <a href="{{ route('user.place.order',$key) }}" class="btn btn-info">
                                            Order
                                        </a>
                                        <a href="{{ route('user.remove.cart',$key) }}" class="btn btn-danger">
                                            Remove
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <p class="text-danger">There is no product into the cart</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>