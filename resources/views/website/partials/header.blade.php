<section class="header">
        <nav class="navbar navbar-expand-lg navbar-light  bg-white">
            <a class="navbar-brand" href="#"><img src="{{ url('website/images/logo.png') }}" alt="" srcset=""></a>
            <!-- icon -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#category" aria-controls="category" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- search bar -->
            <div class="searchBar">
                <form class="form-inline m-2">
                    <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>

            <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-4">
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">
                            <h3>Offers</h3>
                        </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link" href="#">
                            <h4>Laptop <br> Deal</h4>
                        </a>
                    </li>
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h3>Account</h3>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">login</a>
                            <a class="dropdown-item" href="#">Register</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Category -->
        <div class="category" id="category">
            <div class="menu bg-white">
                <ul>
                    <li><a href="#">Desktop</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Component</a></li>
                    <li><a href="#">Monitor</a></li>
                    <li><a href="#">UPS</a>
                        <div class="sub_menu_1">
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