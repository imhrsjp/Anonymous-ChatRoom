<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="css1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/css/util.css">
	<link rel="stylesheet" type="text/css" href="css1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
        
        <div class="container-login100" style="background-image: url('css1/images/bg-01.jpg');">
            <div class="container"><a href="index.php" style="float:right;"><button class="btn btn-default" style="color:white; background-color:gray; margin-top:50px">Home</button></a></div>
			<div class="wrap-login100 p-t-30 p-b-50">
                
				<span class="login100-form-title p-b-41">
					send message
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="data.php" method="POST">

                    <div class="wrap-input100 validate-input" data-validate = "Enter Name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

				    <div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="mail" name="mail" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe89a;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter message">
						<input class="input100" type="text" name="mess" placeholder="Message">
						<span class="focus-input100" data-placeholder="&#xe87a;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter Contact No">
						<input class="input100" type="number" name="phone" placeholder="Contact No">
						<span class="focus-input100" data-placeholder="&#xe83a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="css1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="css1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="css1/vendor/bootstrap/js/popper.js"></script>
	<script src="css1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="css1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="css1/vendor/daterangepicker/moment.min.js"></script>
	<script src="css1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="css1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="css1/js/main.js"></script>

</body>
</html>