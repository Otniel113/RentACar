<html>

<head>
    <link href="{{ '/css/gallery.css' }}" rel="stylesheet">
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
    </div><br>

    <div class="container">
        <div class="row">
            <a href="https://awsimages.detik.net.id/community/media/visual/2021/01/18/ariel-noah_43.png?w=700&q=90"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://awsimages.detik.net.id/community/media/visual/2021/01/18/ariel-noah_43.png?w=700&q=90"
                    class="img-fluid rounded">
            </a>
            <a href="https://statics.indozone.news/content/2021/12/16/1xs5BRn/gading-marten-tiba-tiba-singgung-konten-duka-dua-nama-artis-langsung-jadi-sorotan31_700.jpg"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://statics.indozone.news/content/2021/12/16/1xs5BRn/gading-marten-tiba-tiba-singgung-konten-duka-dua-nama-artis-langsung-jadi-sorotan31_700.jpg"
                    class="img-fluid rounded">
            </a>
            <a href="https://thumb.intipseleb.com/media/frontend/thumbs3/2022/01/26/61f0fd278391c-vinceng-rompies_663_372.jpg"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://thumb.intipseleb.com/media/frontend/thumbs3/2022/01/26/61f0fd278391c-vinceng-rompies_663_372.jpg"
                    class="img-fluid rounded">
            </a>
        </div>
        <div class="row">
            <a href="https://static.republika.co.id/uploads/images/inpicture_slide/053951100-1600472731-5f63ce8be1ea4-ari-lassojpg.jpg"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://static.republika.co.id/uploads/images/inpicture_slide/053951100-1600472731-5f63ce8be1ea4-ari-lassojpg.jpg"
                    class="img-fluid rounded">
            </a>
            <a href="https://cdn06.pramborsfm.com/storage/app/media/Prambors/Editorial/Justin%20Bieber-20220301165300.jpg?tr=w-800"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://cdn06.pramborsfm.com/storage/app/media/Prambors/Editorial/Justin%20Bieber-20220301165300.jpg?tr=w-800"
                    class="img-fluid rounded">
            </a>
            <a href="https://hardrockfm.com/wp-content/uploads/2017/08/BrunoMars.jpg" data-toggle="lightbox"
                data-gallery="gallery" class="col-md-4">
                <img src="https://hardrockfm.com/wp-content/uploads/2017/08/BrunoMars.jpg" class="img-fluid rounded">
            </a>
        </div>
    </div>
</body>

</html>
