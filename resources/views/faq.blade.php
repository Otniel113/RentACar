<html>

<head>
    <link href="{{ '/css/faq.css' }}" rel="stylesheet">
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

    <div class="faqbody">
        <div class='centerplease'>
            <p>FAQ?</p>
        </div>
        <br>

        <div class="content">
            <div>
                <input type="checkbox" id="question1" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question">
                    <p>Pertanyaan 1</p>
                </label>
                <div class="answers">
                    <p>jawaban 1</p>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question2" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question2" class="question">
                    <p>Pertanyaan 2</p>
                </label>
                <div class="answers">
                    <p>jawaban 2</p>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question3" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question3" class="question">
                    <p>Pertanyaan 3</p>
                </label>
                <div class="answers">
                    <p>jawaban 3</p>
                </div>

            </div>
            <div>
                <input type="checkbox" id="question4" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question4" class="question">
                    <p>Pertanyaan 4</p>
                </label>
                <div class="answers">
                    <p>jawaban 4</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of body !-->

</body>

</html>
