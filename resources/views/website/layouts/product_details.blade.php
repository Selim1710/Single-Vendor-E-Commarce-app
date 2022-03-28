@extends('website.master')
@section('contents')

<section class="poroduct-details">
	<div class="container">
		<div class="productDetailsCard">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
							<div><img src="{{ asset('uploads/products/'.$product->product_image) }}" /></div>
						</div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{ $product->product_name }}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{ $product->product_description }}</p>
						<h4 class="price">current price: <span> $ {{ $product->regular_price }}</span></h4>
						<p class="vote"><strong>{{ $product->product_offer }} %</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">Model:
							<span class="size" data-toggle="tooltip" title="small">{{ $product->model }}</span>
							
						</h5>
						<h5 class="colors">Stock Status:
							<span>Not Available</span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection