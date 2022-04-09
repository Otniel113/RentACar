<html>

<head>
    <link href="{{ '/css/register.css' }}" rel="stylesheet">
    <script src="{{ '/js/register.js' }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <body ng-controller="RegisterCtrl" ng-app="myApp">
        <div class="container">
            <br />
            <br />
            <br />
            <h3 style="text-align: center;">Register</h3>

            <br />
            <br />

            <form action="/register" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id=name
                            placeholder="Input your fullname here" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                            id=username placeholder="Example : stevenelkurniawan">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id=email placeholder="Example : steven1@rent.com">
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
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" id=password placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Register">
                    <a href="/home">
                        <button type="button" class="btn btn-danger">Back</button>
                    </a>
                </div>

            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login Now!</a></small>
        </div>
    </body>
</body>

</html>
