@extends('website.master')
@section('contents')
    <section class="featured-Product border" id="featured_product">
        <div class="productHeader">
            <h1>Our Products</h1>
            <p>Check & Get Your Desired Product !</p>
        </div>
        <div class="container">
            <div class="row border border-secondary rounded text-center">
                <div class="col-lg-10 col-sm-6">
                    <div class="filter">
                        <h3><i class="fa fa-filter"></i> Filter</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="shorting d-flex">
                        <p>shorted by:</p>
                        <select name="price" id="" class="form-control w-50">
                            <option value="low">Low</option>
                            <option value="mid">Mid</option>
                            <option value="high">High</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            {{-- filter --}}
            <div class="container w-25 border">
                <div class="row m-2">
                    <div class="col-12 bg-white mt-2">
                        <h2 class="p-2 rounded">Availability</h2>
                        <h6><input type="checkbox"> sidenav</h6>
                        <h6><input type="checkbox"> sidenav</h6>
                        <h6><input type="checkbox"> sidenav</h6>
                    </div>
                    <div class="col-12 bg-white mt-3">
                        <h2>Brand</h2>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h2>Processor Type</h2>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h2>Processor model</h2>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h2>Generation</h2>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h2>Display Type</h2>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                </div>
            </div>
            {{-- product --}}
            <div class="container d-flex w-75">
                <div class="product">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="column d-flex align-items-stretch">
                                <div class="box">
                                    <a href="{{ route('website.product.details', $product->id) }}">
                                        <div class="img-box">
                                            <img src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                class="img-fluid">
                                        </div>
                                    </a>
                                    <div class="detail-box">
                                        <h5>
                                            Model: {{ $product->model }}
                                        </h5>
                                        <h6>
                                            Price: {{ $product->regular_price }}
                                        </h6>
                                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary">Add To
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="float-right mr-4">
            {{ $products->links() }}
        </div>
        <br><br>
    </section>
@endsection
