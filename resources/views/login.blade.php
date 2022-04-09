<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <br />
        <h3 style="text-align: center;">Login</h3>

        <br />
        <br />

        <form action="/login" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email"
                        placeholder="email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="password"
                        required>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success" value="Login">
                <a href="/home">
                    <button type="button" class="btn btn-danger">Back</button>
                </a>
            </div>

        </form>
        <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    </div>
</body>

</html>
