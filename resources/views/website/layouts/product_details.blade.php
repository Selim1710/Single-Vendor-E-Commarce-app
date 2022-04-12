@extends('website.master')
@section('contents')
<section class="Product-Details">
	<div class="container">
		<div class="col-lg-12  p-3 main-section bg-white">
			<div class="row">
				<div class="col-lg-6 left-side-product-box pb-3">
					<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class=" p-3">
					<span class="sub-img">
						<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class=" p-2">
						<img src="{{ asset('/uploads/products/'.$product->product_image ) }}" class=" p-2">
					</span>
				</div>
				<div class="col-lg-6 text-capitalize">
					<div class="right-side-pro-detail p-3">
						<div class="row">
							<div class="model col-lg-12 font-italic">
								<h2> {{ $product->model }} &nbsp; {{ $product->product_name }}</h2>
							</div>
							<div class="col-lg-12">
								<p class=" p-0 price-pro">Price: {{ $product->regular_price }}</p>
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
					<div class="payment m-3">
						<h3>Payment Options:</h3>
					</div>
				</div>
			</div>
			<!-- nav-menu -->
			<div class="row">
				<div class="col-lg-12 text-center pt-3">
					<h4> Specifications</h4>
				</div>
			</div>
			<div class="row mt-3 p-0 text-center pro-box-section">
				<!-- table -->
				<div class="my-table col-lg-12">
					<table class="table table-borderless table-hover">
						<thead>
							<tr>
								<th>Basic Information</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>processor</td>
								<td>mark</td>
							</tr>
							<tr>
								<td>display</td>
								<td>mark</td>
							</tr>
							<tr>
								<td>memory</td>
								<td>mark</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection