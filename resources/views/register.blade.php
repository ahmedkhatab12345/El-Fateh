<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="post" action="{{route('createuser')}}"enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="en_first_name" value="{{old('en_first_name','')}}">
						<span class="focus-input100" data-placeholder="firstname" required></span>
					</div>
					@error('firstname')
					<p style="color: red;">{{$message}}</p>
					@enderror
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="en_last_name" required  value="{{old('en_last_name','')}}"> 
						<span class="focus-input100" data-placeholder="lastname"></span>
					</div>
					@error('lastname')
					<p style="color: red;">{{$message}}</p>
					@enderror

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="ar_first_name" value="{{old('ar_first_name','')}}">
						<span class="focus-input100" data-placeholder="firstname(ar)" required></span>
					</div>
					@error('firstname')
					<p style="color: red;">{{$message}}</p>
					@enderror
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="ar_last_name" required  value="{{old('ar_last_name','')}}"> 
						<span class="focus-input100" data-placeholder="lastname(ar)"></span>
					</div>
					@error('lastname')
					<p style="color: red;">{{$message}}</p>
					@enderror

                    <div class="wrap-input100 " >
						<input class="input100" type="number" name="phone"  value="{{old('number','')}}">
						<span class="focus-input100" data-placeholder="phonenumber" ></span>
					</div>
					@error('phone')
					<p style="color: red;">{{$message}}</p>
					@enderror
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email"  value="{{old('email','')}}">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					@error('email')
					<p style="color: red;">{{$message}}</p>
					@enderror
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password"  value="{{old('password','')}}">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					@error('password')
					<p style="color: red;">{{$message}}</p>
					@enderror

					<div class="wrap-input100">
					<label for=""> your photo</label>
					<input class="input100" type="file" name="photo">
					</div>
                   
					
                    <div class="wrap-input100">
					<label for="g"> gender</label>
					<select name="gender" id="g">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
					</div>
					<input type="hidden" name="status" value="0">
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
						you have an account?
						</span>

						<a class="txt2" href="{{route('loginuser')}}">
							Sign in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>