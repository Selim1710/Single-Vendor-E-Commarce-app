@extends('website.master')
@section('contents')
<button class="btn btn-info w-100" type="button" data-toggle="collapse" data-target="#category" aria-expanded="false" aria-controls="collapseExample">
    See All Categories
</button>
<!-- Category -->
<div class=" collapse category p-lg-1" id="category">
    <div class="menu">
        <ul>
            <li><a href="#">Desktop</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">Component</a></li>
            <li><a href="#">Monitor</a></li>
            <li><a href="#">UPS</a>
                <div class="sub_menu_1 bg-success">
                    <ul>
                        <li><a href="#">Online UPS</a></li>
                        <li><a href="#">Offline UPS</a></li>
                        <li><a href="#">Battery</a></li>
                        <li><a href="#">All UPS</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- compare product -->

<section class="product-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-8">
                <div class="carousel" data-ride="carousel" id="carouselExampleControls">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('website/images/t1.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('website/images/t2.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('website/images/t3.png') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="compare-product text-center">
                    <h1>Compare Product</h1>
                    <p>Choose two product to compare</p>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control m-2 w-100" type="search" placeholder="Search" aria-label="Search">
                        <input class="form-control m-2 w-100" type="search" placeholder="Search" aria-label="Search">
                        <br>
                        <input type="submit" class="bg-secondary p-2 border text-white w-100">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Category -->
<section class="featured-Category">
    <div class="categoryHeader">
        <h1>Featured Category</h1>
        <p>Get Your Desired Product from Featured Category!</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4 col-lg-2">
                <div class="cardCategory m-2">
                    <a href="#">
                        <div class="cart-img img-fluid">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid">
                                <br>
                            <p class="text-center">Desktop</p>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- featured product -->

<section class="featured-Product">
    <div class="productHeader">
        <h1>Featured Product</h1>
        <p>Check & Get Your Desired Product !</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-4">
                <div class="card">
                    <a href="{{ route('website.product.details') }}" style="color:black;">
                        <div class="card-body">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                            <span>Price: $20</span>
                            <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- extra -->
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                        <span>Price: $20</span>
                        <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Description -->

<section class="descripiton">
    <div class="container">
        <h4 class="p-1 mt-4">Leading Computer, Laptop & Gaming PC Retail & Online Shop in Bangladesh</h4>

        <article>Technology has become a part of our daily lives and for a huge portion of our life, we are dependent on tech products daily. There is hardly a home in Bangladesh without a tech product. This is where we come in. Star Tech & Engineering Ltd had started as a Tech product shop way back in March 2007. We focused on giving the customers the best service possible. This is why Star Tech is one of The most trusted names in the tech industry of Bangladesh today.</article>
    </div><br><br><br>
</section>
@endsection