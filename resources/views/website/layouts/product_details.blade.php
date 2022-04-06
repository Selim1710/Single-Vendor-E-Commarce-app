@extends('website.master')
@section('contents')

<section class="snippet-body">
	<div class="container">
		<div class="col-lg-10 border p-3 main-section bg-white">
			<div class="row hedding pl-3 pt-0 pb-3">
				Product Detail
			</div>
			<div class="row ">
				<div class="col-lg-4 left-side-product-box pb-3">
					<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class="border p-3">
					<span class="sub-img">
						<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class="border p-2">
						<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class="border p-2">
						<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class="border p-2">
					</span>
				</div>
				<div class="col-lg-8">
					<div class="right-side-pro-detail border p-3 ">
						<div class="row">
							<div class="col-lg-12">
								<span>{{ $product->model }}</span>
								<p class=" p-0">{{ $product->product_name }}</p>
							</div>
							<div class="col-lg-12">
								<p class=" p-0 price-pro">{{ $product->regular_price }}</p>
								<hr class="p-0 ">
							</div>
							<div class="col-lg-12 pt-2">
								<h5>Product Detail</h5>
								<span>
									{{ $product->product_description }}
								</span>
								<hr class=" pt-2 mt-2">
							</div>
							<div class="col-lg-12">
								<p class="tag-section"><strong>Availability : </strong><span>Out Of Stock</span></p>
							</div>
							<div class="col-lg-12">
								<h6>Quantity :</h6>
								<input type="number" class="form-control text-center w-100" value="1">
							</div>
							<div class="col-lg-12 mt-3">
								<div class="row">
									<div class="col-lg-6 pb-2">
										<a href="#" class="btn btn-danger w-100">Add To Cart</a>
									</div>
									<div class="col-lg-6">
										<a href="#" class="btn btn-success w-100">Shop Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center pt-3">
					<h4>More Product</h4>
				</div>
			</div>
			<div class="row mt-3 p-0 text-center pro-box-section">
				<div class="col-lg-3 pb-2">
					<div class="pro-box border p-0 ">
						<img src="http://nicesnippets.com/demo/pd-b-image1.jpg">
					</div>
				</div>
				<div class="col-lg-3 pb-2">
					<div class="pro-box border p-0 ">
						<img src="http://nicesnippets.com/demo/pd-b-images2.jpg">
					</div>
				</div>
				<div class="col-lg-3 pb-2">
					<div class="pro-box border p-0 ">
						<img src="http://nicesnippets.com/demo/pd-b-images3.jpg">
					</div>
				</div>
				<div class="col-lg-3 pb-2">
					<div class="pro-box border p-0 ">
						<img src="http://nicesnippets.com/demo/pd-b-images4.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection