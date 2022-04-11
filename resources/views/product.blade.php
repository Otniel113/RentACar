<html>

<head>
    <link href="{{ '/css/product.css' }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <!-- Nav -->
    <div class="navigation">
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus">Contact Us</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome Back, {{ auth()->user()->name }}</a>
                    </li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @else
                    <li class="nav-item">
                        <a href="login">
                            <button type="button" class="btn btn-primary">Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="register">
                            <button type="button" class="btn btn-success">Register</button>
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    <!-- End Nav -->


    <div class="container bg-light rounded">
        <div class="h4 font-weight-bold text-center py-3">
            <h2>Our Catalog :</h2>
        </div>

        <!-- Content List -->
        <div class="row">

            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
                <a href="product/mobilkecil">
                    <div class="box bg-white">
                        <div class="d-flex align-items-center">
                            <div
                                class="rounded-circle mx-3 text-center d-flex align-items-center justify-content-center blue">
                                <img src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/car-512.png"
                                    alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <b>Mobil Kecil</b>
                                <!-- <p class="text-muted">2 Items</p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
                <a href="product">
                    <div class="box bg-white">
                        <div class="d-flex align-items-center">
                            <div
                                class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange">
                                <img src="https://cdn1.iconfinder.com/data/icons/ios-11-glyphs/30/car-512.png" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <b>Mobil Besar</b>
                                <!-- <p class="text-muted">3 Items</p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 my-lg-0 my-3">
                <a href="google.com">
                    <div class="box bg-white">
                        <div class="d-flex ali  gn-items-center">
                            <div
                                class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-purple">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Bus-logo.svg/1200px-Bus-logo.svg.png" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <b>Minibus</b>
                                <!-- <p class="text-muted">2 Items</p> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-lg-4 col-md-6 my-lg-3 my-3">
                <a href="google.com">
                    <div class="box bg-white">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-cyan">
                                <img src="https://freepngimg.com/thumb/brain/80003-learning-human-albert-play-scientist-behavior-einstein-thumb.png"
                                    alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <b>Driver + Car</b>
                                <p class="text-muted">2 Packet</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 my-lg-3 my-3">
                <a href="google.com">
                    <div class="box bg-white">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-pink">
                                <img src="https://freepngimg.com/thumb/google/66809-google-docs-drive-plus-android-document-thumb.png"
                                    alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <b>Driver + Car + Fuel</b>
                                <p class="text-muted">2 Packet</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 my-lg-3 my-3">
                <a href="google.com">
                    <div class="box bg-white">
                        <div class="d-flex align-items-center">
                            <div
                                class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange">
                                <img src="https://www.freepnglogos.com/uploads/plane-png/plane-png-fort-wayne-international-airport-2.png"
                                    alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <b>Private Trip Bali</b>
                                <p class="text-muted">2 Packet</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
        <!-- End Content List -->
</body>

</html>
