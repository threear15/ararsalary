<?php 
session_start();
if(isset($_SESSION['Role'])){
    header("Location:dashboard");
}elseif(isset($_SESSION['phone'])){
    header("Location:changedpass");
}
 ?>
<!doctype html>
<!-- 
* Datastiq Digital Marketing Agency
* Email: datastiq@gmail.com
* Author: Three Ar Sempron
* Copyright 2018 Three Ar Sempron
* Website: https://datastiq.com/
-->
<html lang="en" class="fullscreen-bg">

<head>
	<title>DATASTIQ Digital Marketing Agency</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<script src="assets/js/sweetalert.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
<script src="assets/js/sweetalert.min.js"></script>
	<link href="assets/vendor/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/auth.css" rel="stylesheet">
	<style>
		.alert-success {width: 300px;padding: 10px;padding-right: 35px;color: #155724;background-color: #d4edda;border-color: #c3e6cb;border-radius: 5px;}
		.alert-success .close {border: none;background: none;position: absolute !important;top: 20px !important;right: 6px !important;outline: none;}
		.logome{
			width: 	70%;
		}
	</style>
</head>

<body>
	<div id="wrapper">

		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="content">
						<div class="header">
							<div class="logo align-center">
								<img src="assets/images/img/datastiq.png" class="logome" alt="datastiq	">
							</div>
							<p class="lead">Sign in to your account</p>
						</div>
						<?php
if(isset($_POST['submit'])){
	require 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = 'SELECT * FROM dqadmin_tbl WHERE username = :username' ;
$statement = $connection->prepare($sql);
$statement->execute([':username' => $username]);
$row = $statement->fetch(PDO::FETCH_ASSOC);
if($row == true) {
	$_SESSION['id'] = $row['id'];
	$_SESSION['Role'] = $row['Role'];
        // check if the hashed row password
        if(password_verify($password, $row['password'])) {

            echo "
			<script>
			
        
        setTimeout(function() {
        swal({
            title: 'Successfully Login',
            text: '',
            type: 'success'
        }, function() {
            window.location = 'dashboard';
        });
    }, 1);
			</script>
		";
        }else{
        	echo"
			<script>
			
        
        setTimeout(function() {
        swal({
            title: 'Invalid',
            text: '',
            type: 'error'
        }, function() {
            window.location = 'logout';
        });
    }, 1);
			</script>
		";	
}
        
    } else{
	echo"
			<script>
			
        
        setTimeout(function() {
        swal({
            title: 'Invalid',
            text: '',
            type: 'error'
        }, function() {
            window.location = 'login';
        });
    }, 1);
			</script>
		";	
}

}
 ?>
						<form class="form-auth-small ui form" method="POST">

							<div class="fields">
								<div class="sixteen wide field">
									<label for="email" class="color-white">Username</label>
									<input  type="text" class="" name="username" placeholder="username" required autofocus>

									<!-- <span class="help-block">
                                        <strong></strong>
                                    </span> -->
								</div>
							</div>
							<div class="fields">
								<div class="sixteen wide field">
									<label for="password" class="color-white">Password</label>
									<input id="password" type="password"  name="password" placeholder="Your password" required>

									<!-- <span class="help-block">
                                        <strong></strong>
                                    </span> -->
								</div>
							</div>
							<div class="fields">
								<div class="sixteen wide field">
										<label class="color-white"><a class="color-white" href="forgotpass">Forgot Password</a></label>
								</div>
							</div>

							<button type="submit" name="submit"class="ui green button large fluid">SIGN IN</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/vendor/semantic-ui/semantic.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>

	<script>
		$('.ui.checkbox').checkbox('uncheck', 'toggle');

		$(document).ready(function() {
            $.notify({
                icon: 'ui icon check',
                message: "DATASTIQ Digital Marketing Agency"},
                {type: 'success',timer: 400}
            );
        });
	</script>
</body>

</html>