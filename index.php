<?php 
session_start();
$koneksi = mysqli_connect("localhost","root","","raport-online");
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM user left join siswa on user.id_user=siswa.id_user left join orang_tua on orang_tua.user_ortu=user.id_user where user.USERNAME = '$username' and user.PASSWORD = '$password'";
	$exec = mysqli_query($koneksi, $query);
	$array = mysqli_fetch_array($exec);
	if ($array['USERNAME'] == $username && $array['PASSWORD'] == $password) {
		$_SESSION['USERNAME'] = $array['USERNAME'];
		$_SESSION['AKSES'] = $array['AKSES'];
		$_SESSION['NO_INDUK'] = $array['NO_INDUK'];
		$_SESSION['ID_ORTU'] = $array['ID_ORTU'];
		if ($_SESSION['AKSES'] == "siswa") {
			header("location:santri");
		}
		elseif ($_SESSION['AKSES'] == "ortu") {
			header("location:orangtua");
		}
		elseif ($_SESSION['AKSES'] == "admin") {
			header("location:admin");
		}
	} else {
		echo "<script>alert('Username Atau Password Salah')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PPM SYAFIURROHMAN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="images/icons/ayeaye.jpg"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/ppmppm.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					PPM SYAFIURROHMAN<br>
					- LOGIN -
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action=" ">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="login">
							Login
						</button>
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