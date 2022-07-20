@extends('website.master')
@section('contents')
<section class="featured-Product border" id="featured_product">
    <div class="productHeader">
        <h1>Customize Products</h1>
        <p>Customize & Build your own PC !</p>
    </div>
    <div class="product">
        <div class="row">
            @foreach($products as $product)
            <div class="column d-flex align-items-stretch">
                <div class="box">
                    <a href="{{ route('website.product.details',$product->id) }}">
                        <div class="img-box">
                            <img src="{{ asset('uploads/customization/products/'.$product->image) }}" class="img-fluid">
                        </div>
                    </a>
                    <div class="detail-box">
                        <h5>
                            Model: {{ $product->model }}
                        </h5>
                        <h6>
                            Price: {{ $product->price }}
                        </h6>
                        <a href="{{ route('user.add.customize.product',$product->id) }}" class="btn btn-primary">Add</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="float-right mr-4">
        {{ $products->links() }}
    </div>
    <br><br>
</section>
@endsection