<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">

    <title>BGD Online Limited</title>
</head>

<body>
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

    <!-- compare product -->

    <section class="product-slider">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('website/images/t1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('website/images/t2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('website/images/t3.jpg') }}" alt="Third slide">
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
                <div class="col col-md-4">
                    <div class="compare-product">
                        <h1>Compare Product</h1>
                        <p>Choose two product to compare</p>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search">
                            <br>
                            <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search">
                            <br>
                            <input type="submit" style="color:white;background-color: grey;">
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
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- extra -->
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3 col-lg-2">
                    <div class="cardCategory">
                        <a href="#">
                            <div class="card-body">
                                <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                                <h5>Desktop</h5>
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
                        <div class="card-body">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                            <span>Price: $20</span>
                            <p>Gree GSH-18NFV410 1.5 Ton Split Type Inverter Air Conditioner</p>
                        </div>
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


    <section class="companyDescripton">
        <div class="footerD">
            <div class="support text-center">
                <h4>SUPPORT</h4>
                <div class="time">
                    <h5>Time: 10.00am to 06.00pm</h5>
                </div>
                <div class="contact">
                    <h5>Contact: 016........</h5>
                </div>
            </div>
            <div class="about-us text-center">
                <h4>ABOUT US </h4>
                <a href="#">Refund Policy</a>
                <a href="#" class="ml-2">Terms & Condition</a>
            </div>
            <div class="stay-connected text-center">
                <h4>STAY CONNECTED </h4>
                <p>BGD online limitd <br>
                    Phone : +88 019-72379494 <br>
                    Landline : : +88 02-8090528 <br>
                    Email : info@bgdonline.net <br>
                    Address : 820, Mamun Tower(8th floor),
                    Shewrapara, Mirpur, Dhaka-1216
                </p>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>