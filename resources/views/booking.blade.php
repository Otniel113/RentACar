<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking - Rent A Car</title>
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
                    <a class="nav-link" href="product">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking">Booking</a>
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

        <h2 style="text-align: center;">Booking</h2>
        <div class="row justify-content-center" style="margin-top:5%">
            <div class="col-10">
                <span class="float-left">{{ session('msg') }}</span>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID Booking</th>
                        <th>ID Mobil</th>
                        <th>Nama Mobil</th>
                        <th>Jenis Mobil</th>
                        <th>Wisata</th>
                        <th>ID Member</th>
                        <th>Nama Member</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($list as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->id_mobil }}</td>
                        <td>{{ $d->nama_mobil }}</td>
                        <td>{{ $d->jenis_mobil }}</td>
                        <td>{{ $d->wisata }}</td>
                        <td>{{ $d->id_member }}</td>
                        <td>{{ $d->nama_member }}</td>
                        <td>{{ $d->status }}</td>
                        @auth
                            <td>
                                <a href="/booking/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                                <form method="post" action="/booking/{{ $d->id }}"
                                    style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                    @endforeach
                </table>
            </div>
    </div>

</body>

</html>
