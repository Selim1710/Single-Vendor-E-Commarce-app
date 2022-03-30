@extends('website.master')
@section('contents')

<!-- See All Categories Button -->

<button class="btn w-100 text-white" style="background:#16a085;" type="button" data-toggle="collapse" data-target="#category" aria-expanded="false" aria-controls="collapseExample">
    See All Categories &rarr;
</button>

<!-- Category -->

<div class=" collapse category p-lg-1" id="category">
    @foreach($categories as $category)
    <div class="btn-group">
        <a href="#" class="btn btn-success dropdown-toggle m-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $category->category_name }}
        </a>
        @if(!empty($category->subCategories))
        <div class="dropdown-menu">
            @foreach($category->subCategories as $subCategory)
            <a class="dropdown-item" href="#">{{ $subCategory->sub_category_name }}</a>
            @endforeach
        </div>
        @endif
    </div>
    @endforeach
</div>

<!-- Carousel -->

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
            <!-- compare product -->
            <div class="col-md-4">
                <div class="compare-product text-center">
                    <h1>Compare Product</h1>
                    <p>Choose two product to compare</p>
                    <form action="{{ route('user.compare.product') }}" class="form-inline my-2 my-lg-0">
                        <input type="search" name="search_c1" value="" placeholder="Search" class="form-control m-2 w-100" aria-label="Search">
                        <input type="search" name="search_c2" value="" placeholder="Search" class="form-control m-2 w-100" aria-label="Search">
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
            @foreach($categories as $category)
            <div class="col-4 col-lg-2">
                <div class="cardCategory m-2">
                    <a href="#">
                        <div class="cart-img img-fluid">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid">
                            <br>
                            <p class="text-center">{{ $category->category_name }}</p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
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
            @foreach($products as $product)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <a href="{{ route('website.product.details',$product->id) }}" style="color:black;">
                        <div class="card-body">
                            <img src="{{ asset('uploads/products/'.$product->product_image) }}" alt="" class="img-fluid"><br><br>
                            <p>{{ $product->model }}</p>
                            <span class="text-success">Price: {{ $product->regular_price }}</span>

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
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