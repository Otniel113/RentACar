<html>

<head>
    <link href="{{ '/css/style.css' }}" rel="stylesheet">
    <script src="{{ '/js/main.js' }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
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

    <div id="parallax-world-of-ugg">
        <section>
            <div class="parallax-one">
                <div class="text">
                    <h2 style="color: black">The Best Car Rent</h2>
                    <br>
                    <h2 style="color: black;">In This Town</h2>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <p><span></span>Our rent alwys give you discount all the time till this fucking world end
                    asjodbasjfshoisnhfoasfhoasfoupasbfoasbfubasoupfasoufuasoh</p>
                <p class="line-break margin-top-10"></p>
            </div>
        </section>

        <section>
            <div class="parallax-two">
                <h2>CONTACT US BELOW</h2>
                <div class="icon" align="center">
                    <a href="https://instagram.com/">
                        <img class="img"
                            src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-512.png"
                            alt="Instagram">
                    </a>

                    <a href="web.instagram.com/">
                        <img class="img"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/479px-WhatsApp.svg.png"
                            alt="WhatsApp">
                    </a>

                    <a href="https://facebook.com/">
                        <img class="img"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1024px-Facebook_f_logo_%282019%29.svg.png"
                            alt="Facebook">
                    </a>

                    <a href="https://gmail.com/">
                        <img class="img"
                            src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png"
                            alt="E-Mail">
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
