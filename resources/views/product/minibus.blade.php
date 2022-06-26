<html>

<head>
    <link href="{{ '/css/product/bus.css' }}" rel="stylesheet">
    <script src="{{ '/js/product/main.js' }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Nav -->
    <div class="navigation">
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ '/home' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ '/product' }}">Product</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ '/profile' }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ '/booking' }}">Booking</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ '/contactus' }}">Contact Us</a>
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
                        <a href="/login">
                            <button type="button" class="btn btn-primary">Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/register">
                            <button type="button" class="btn btn-success">Register</button>
                        </a>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
    <!-- End Nav -->

    <!-- Body -->
    <!-- Content 1 -->
    <div class="container">

        <h2 style="text-align: center;">Minibus</h2>
        <div class="row justify-content-center" style="margin-top:5%">
            <div class="col-10">
                <span class="float-left">{{ session('msg') }}</span>
                @auth
                    <a href="/product/minibus/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
                @endauth
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nama Mobil</th>
                        <th>No. Polisi</th>
                        <th>Driver</th>
                        <th>Wisata</th>
                        <th>Ketersediaan</th>
                        @auth
                            <th>Aksi</th>
                        @endauth
                    </tr>
                    @foreach ($list as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->nama_mobil }}</td>
                            <td>{{ $d->no_polisi }}</td>
                            <td>{{ $d->driver }}</td>
                            <td>{{ $d->wisata }}</td>
                            <td>{{ $d->ketersediaan }}</td>
                            @auth
                                <td>
                                    <a href="/product/minibus/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                                    <form method="post" action="/product/minibus/{{ $d->id }}"
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

    </div>
    <!-- End Content 1 -->
    <!-- End Body -->
</body>

</html>
