<section class="header">
    <!-- {{ asset('website/images/logo.png') }} -->

    <header style="border: 1px solid red;">
        <nav class="navbar navbar-expand-lg">
            <!-- logo -->
            <a href="#"><img src="{{ asset('website/images/logo.png') }} " alt="" srcset=""></a>
            <!-- icon for mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- search bar -->
            <form action="" class="form ml-4"><input type="search" placeholder="search here" class="form-control"></form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Offers</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Laptop Deals</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Account</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Category -->
    <div class="category bg-secondary p-lg-3">
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
</section>