@extends('website.master')
@section('contents')
    <section class="all-product border">
        <div class="productHeader">
            <h1>All Products</h1>
            <p>Check & Get Your Desired Product !</p>
        </div>
        <div class="container">
            <div class="row border border-warning rounded text-center">
                <div class="col-lg-8 col-s-6 d-flex">
                    <div class="m-2">
                        {{-- menu button for mobile --}}
                        <button type="button" class="btn btn-dark" id="mobileMenuFilter" data-toggle="collapse"
                            data-target="#mobileFilterItem">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <h4 class="m-2">Desktop</h4>
                    <a href="{{ URL::current() }}" class="btn btn-light border border-danger m-auto">Refresh</a>
                </div>
                <div class="col-lg-4 col-s-6">
                    {{-- shorting --}}
                    <div class="shorting d-flex justify-content-end">
                        <p class="mt-2">Shorted by:</p>
                        <div class="shortingPrice">
                            <div class="dropdown">
                                <button type="button" class="btn btn-light" data-toggle="dropdown">
                                    Price
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('website.all.product') }}">all</a>
                                    <a class="dropdown-item" href="{{ route('website.shorting.low.price') }}">Low(< 20K)</a>
                                            <a class="dropdown-item" href="{{ route('website.shorting.mid.price') }}">Mid(<
                                                    50K)</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('website.shorting.high.price') }}">High(> 50K)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="allProductFilterItem">
            {{-- mobile filter items --}}
            <div class="first container collapse" id="mobileFilterItem">
                <div class="row">
                    <div class="col-12 bg-white mt-3">
                        <h5 class="p-2 rounded">Availability</h5>

                        <h6><input type="checkbox"> sidenav</h6>
                        <h6><input type="checkbox"> sidenav</h6>
                        <h6><input type="checkbox"> sidenav</h6>
                    </div>
                    <div class="col-12 bg-white mt-3">
                        <h5>Brand</h5>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h5>Processor Type</h5>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h5>Processor model</h5>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h5>Generation</h5>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                    <div class="col-12 bg-white rounded mt-3">
                        <h5>Display Type</h5>

                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                        <h6><input type="checkbox"> brand</h6>
                    </div>
                </div>
            </div>
            {{-- desktop filter items --}}
            <div class="first container" id="desktopFilterItem">
                <form action="#">
                    <div class="row ml-2">
                        <div class="col-12 bg-white mt-2">
                            <h5 class="p-2 rounded">Availability</h5>

                            <h6><input type="checkbox"> sidenav</h6>
                            <h6><input type="checkbox"> sidenav</h6>
                            <h6><input type="checkbox"> sidenav</h6>
                        </div>
                        <div class="col-12 bg-white mt-3">
                            <h5>Brand</h5>

                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                        </div>
                        <div class="col-12 bg-white rounded mt-3">
                            <h5>Processor Type</h5>

                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                        </div>
                        <div class="col-12 bg-white rounded mt-3">
                            <h5>Processor model</h5>

                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                        </div>
                        <div class="col-12 bg-white rounded mt-3">
                            <h5>Generation</h5>

                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                        </div>
                        <div class="col-12 bg-white rounded mt-3">
                            <h5>Display Type</h5>

                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                            <h6><input type="checkbox"> brand</h6>
                        </div>
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-secondary">Filter Result</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- product --}}
            <div class="second">
                <div class="container">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="column d-flex align-items-stretch">
                                <div class="box">
                                    <a href="{{ route('website.product.details', $product->id) }}">
                                        <div>
                                            <img src="{{ asset('uploads/products/' . $product->product_image) }}"
                                                style="width:100%;height:auto;">
                                        </div>
                                    </a>
                                    <div class="detail-box">
                                        <h5>
                                            Model: {{ $product->model }}
                                        </h5>
                                        <h6>
                                            Price: {{ $product->regular_price }}
                                        </h6>
                                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary mb-1">
                                            Add To Cart
                                        </a>
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
