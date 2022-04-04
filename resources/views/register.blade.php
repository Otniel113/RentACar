<html>
    <head>
    <link href="{{ ('/css/register.css') }}" rel="stylesheet">
    <script src="{{ ('/js/register.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <body ng-controller="RegisterCtrl" ng-app="myApp">
    <div class="container">
	<h3 style="text-align: center;">Register</h3>
	
	<br/>
	<br/>
	
	<form action="" method="post">
		{{ csrf_field() }}
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Name</label> 
			<div class="col-sm-10">
				<input type="text" class="form-control" name="Name" placeholder="Input your fullname here">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Username</label> 
			<div class="col-sm-10">
				<input type="text" class="form-control" name="Username" placeholder="Example : stevenelkurniawan">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">E-mail</label> 
			<div class="col-sm-10">
				<input type="e-mail" class="form-control" name="E-mail" placeholder="Example : steven1@rent.com">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Password</label> 
			<div class="col-sm-10">
				<input type="password" class="form-control" name="Password" placeholder="Password">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Re-attempt Password</label> 
			<div class="col-sm-10">
				<input type="password" class="form-control" name="Password" placeholder="Password">
			</div>
		</div>
        <div>
		    <input type="submit" class="btn btn-success" value="Register">
		    <a href="/home"> 
			    <button type="button" class="btn btn-danger">Back</button>
		    </a>
        </div>

	</form>
		
	</div>
</body>
    </body>
</html>