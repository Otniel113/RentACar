<!DOCTYPE html>
<html lang="en">

<head>
    <title>Review - Rent A Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ '/css/review.css' }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="navigation" active>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review">Review</a>
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

    <div class="container">

        <h2 style="text-align: center;">Review</h2>
        <p style="text-align: center;">This is<strong> our </strong>review from customer</p>

        <div class="card-deck">
            <div class="card bg-dark text-white">
                <div class="card-body text-left">
                    <div>
                        <img class="card-img-top"
                            src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                            alt="Mamang Ariel Noah">
                    </div>
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>

            <div class="card bg-dark text-white">
                <div class="card-body text-left">
                    <div>
                        <img class="card-img-top"
                            src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                            alt="Mamang Ariel Noah">
                    </div>
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>

            <div class="card bg-dark text-white">
                <div>
                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                        alt="Mamang Ariel Noah">
                </div>
                <div class="card-body text-left">
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>

            <div class="card bg-dark text-white">
                <div>
                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                        alt="Mamang Ariel Noah">
                </div>
                <div class="card-body text-left">
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>
        </div> <br>

        <div class="card-deck">
            <div class="card bg-dark text-white">
                <div class="card-body text-left">
                    <div>
                        <img class="card-img-top"
                            src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                            alt="Mamang Ariel Noah">
                    </div>
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>

            <div class="card bg-dark text-white">
                <div class="card-body text-left">
                    <div>
                        <img class="card-img-top"
                            src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                            alt="Mamang Ariel Noah">
                    </div>
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>

            <div class="card bg-dark text-white">
                <div>
                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                        alt="Mamang Ariel Noah">
                </div>
                <div class="card-body text-left">
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>

            <div class="card bg-dark text-white">
                <div>
                    <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/6/62/ArielNOAH.jpg"
                        alt="Mamang Ariel Noah">
                </div>
                <div class="card-body text-left">
                    <p class="card-text">Name : Winicontol</p>
                    <p class="card-text">Asal : Jakarta</p>
                    <p class="card-text">Review : Good</p>
                </div>
            </div>
        </div> <br>
    </div>

</body>

</html>
