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

    <title>BGD online limited</title>
</head>

<body>
    <section class="navbarSection">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{ url('website/images/logo.png') }}" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Offers <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laptop Deal</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">login</a>
                            <a class="dropdown-item" href="#">Register</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- Category Section -->
    <section class="category">
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
    </section>

    <!-- compare product -->

    <section class="product-slider">
        <div class="container-fluid">
            <div class="makeFlex">
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
                <div class="compare-product">
                    <h1>Compare Product</h1>
                    <p>Choose two product to compare</p>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <br>
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <br>
                        <input type="submit" style="color:white;background-color: grey;">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Category {{ asset('website/images/t1.jpg') }}-->
    <section class="featured-Category">
        <div class="categoryHeader">
            <h1>Featured Category</h1>
            <p>Get Your Desired Product from Featured Category!</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                            <a href="#" class="btn btn-primary">All laptop</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                            <a href="#" class="btn btn-primary">Desktop</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" srcset=""class="img-fluid"><br><br>
                            <a href="#" class="btn btn-primary">Processor</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('website/images/t1.jpg') }}" alt="" class="img-fluid"><br><br>
                            <a href="#" class="btn btn-primary">SSD</a>
                        </div>
                    </div>
                </div>
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