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
								<p class=" p-0 price-pro">Price: {{ $product->regular_price }} ৳</p>
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
							</div>
							<div class="col-lg-12 mt-3">
								<div class="row ">
									<div class="col-lg-6 ">
										<form action="" method="">
											<input type="number" class="form-control text-center w-100" value="">
											<button type="submit" class="btn btn-success w-100 text-center mt-2">Order Now</button>
										</form>
									</div>
									<div class="col-lg-6 pb-2 mt-5 ">
										<a href="#" class="btn btn-info w-100">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="product-table">
		<h1 class="w-25 p-2 rounded">Specifications</h1>
		<!-- specifications -->
		<table class="table table-hover">
			<p class="bg-secondary text-white p-3 rounded">
				Basic Information
			</p>
			<tbody>
				<tr>
					<td>Processor</td>
					<td>
						Backlit Magic Keyboard with:
						78 (ANSI) or 79 (ISO) keys including 12 function keys and 4 arrow keys in an inverted-T arrangement
						Ambient light sensor
						Force Touch trackpad for precise cursor control and pressure-sensing capabilities; enables Force clicks, accelerators, pressure-sensitive drawing, and Multi-Touch gestures
					</td>
				</tr>
				<tr>
					<td>Display</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Memory</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Storage</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Graphics</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Operating System</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Battery</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Adapter</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Audio</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>
		<!-- input device -->
		<table class="table table-hover">
			<p class="bg-secondary text-white p-3 rounded">
				input device
			</p>
			<tbody>
				<tr>
					<td>Keyboard</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Optical drive</td>
					<td>2</td>
				</tr>
				<tr>
					<td>WebCam</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>
		<!-- Network & Wireless Connectivity -->
		<table class="table table-hover">
			<p class="bg-secondary text-white p-3 rounded">
				Network & Wireless Connectivity
			</p>
			<tbody>
				<tr>
					<td>Wi-fi</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Bluetooth</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>
		<!-- Ports, Connectors & Slots -->
		<table class="table table-hover">
			<p class="bg-secondary text-white p-3 rounded">
				Ports, Connectors & Slots
			</p>
			<tbody>
				<tr>
					<td>USB</td>
					<td>2</td>
				</tr>
				<tr>
					<td>HDMI</td>
					<td>2</td>
				</tr>
				<tr>
					<td>VGA</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Audio Jack Combo</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>
		<!-- Physical Specification -->
		<table class="table table-hover">
			<p class="bg-secondary text-white p-3 rounded">
				Physical Specification
			</p>
			<tbody>
				<tr>
					<td>Dimensions (W x D x H)</td>
					<td>2</td>
				</tr>
				<tr>
					<td>weights</td>
					<td>2</td>
				</tr>
				<tr>
					<td>color</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>
		<!--  Warranty -->
		<table class="table table-hover">
			<p class="bg-secondary text-white p-3 rounded">
				Warranty
			</p>
			<tbody>
				<tr>
					<td>Manufacturing Warranty</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>

	</div>
</section>
@endsection