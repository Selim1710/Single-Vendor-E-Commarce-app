<section class="header">
	<nav class="navbar navbar-dark navbar-default navbar-expand-xl">
		<a href="{{ route('website.home') }}" class="navbar-brand"><img src="{{ asset('website/images/bgdlogo.jpg') }}" alt="logo">BGD</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
			<form class="navbar-form form-inline">
				<div class="input-group search-box">
					<input type="text" id="search" class="form-control" placeholder="Search here...">
					<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
				</div>
			</form>
			<div class="navbar-nav ml-auto">
				<a href="{{ route('website.home') }}" class="nav-item nav-link" style="padding-right: 3.5rem;padding-left: 3.5rem;"><i class="fa fa-home"></i>
					<span>Home</span>
				</a>
				<a href="{{ route('website.offers') }}" class="nav-item nav-link" style="padding-right: 3.5rem;padding-left: 3.5rem;"><i class="fa fa-gift"></i>
					<span>Offers</span>
				</a>
				<a href="{{ route('website.laptop.deals') }}" class="nav-item nav-link" style="padding-right: 3.5rem;padding-left: 3.5rem;"><i class="fa fa-briefcase"></i>
					<span>Laptop Deals</span>
				</a>
				@if(auth()->user())
				<a href="{{ route('user.profile',auth()->user()->id) }}" class="nav-item nav-link" style="padding-left: 3.5rem;">
					<i class="fa fa-user"></i>
					<span>Profile </span><span class="badge badge-danger">{{ session()->has('cart') ? count(session()->get('cart')):0 }}</span>
				</a>
				@else
				<a href="{{ route('users.login.form') }}" class="nav-item nav-link" style="padding-left: 3.5rem;"><i class="fa fa-users"></i>
					<span>Accounts</span>
				</a>
				@endif
			</div>
		</div>
	</nav>
</section>