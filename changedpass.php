<?php 
session_start();
if(isset($_SESSION['Role'])){
    header("Location:employees");
}if(!isset($_SESSION['phone'])){
    header("Location:login");
}
 ?>
<!doctype html>
<!-- 
* Smart Timesheet Preview 
* Email: official.smarttimesheet@gmail.com
* Version: 3.0
* License: The MIT License
* Author: Brian Luna
* Copyright 2018 Brian Luna
* Website: https://github.com/brianluna/smarttimesheet
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
							
						</div>
						<?php
if(isset($_POST['submit'])){
	require 'db.php';
$phone = $_SESSION['phone'];
$password = $_POST['newpassword'];
$pass_hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
$sql = 'SELECT * FROM dqadmin_tbl WHERE phone=:phone';
$statement = $connection->prepare($sql);
$statement->execute([':phone' => $phone ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
$sql = 'UPDATE dqadmin_tbl SET password=:pass_hash WHERE phone=:phone';

  $statement = $connection->prepare($sql);

    if ($statement->execute([':pass_hash' => $pass_hash, ':phone' => $phone])) {
   echo "<script>
            
        
        setTimeout(function() {
        swal({
            title: 'New Password has been successfully created',
            text: '',
            type: 'success',
        }, function() {
            window.location = 'logout';
        });
    }, 10);
            </script>";
  }else{
 echo "\nPDO::errorInfo():\n";
    print_r($statement->errorInfo());
}

}
 ?>
						<form class="form-auth-small ui form" method="POST">

							<div class="fields">
								<div class="sixteen wide field">
									<label for="email" class="color-white">New Password</label>
									<input  type="text" class="" name="newpassword" placeholder="New Password" required autofocus>

									<!-- <span class="help-block">
                                        <strong></strong>
                                    </span> -->
								</div>
							</div>

							<button type="submit" name="submit" class="ui green button large fluid"> SUBMIT</button>
							<p class="lead"><a href="logout" class="ui red button large fluid">exit</a></p>
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
				message: "HTML Preview only: adding, editing, deleting records is limited and for viewing purpose only."},
				{type: 'success',timer: 400}
			);
			$('.alert-succes').hide(400);
		});
	</script>
</body>

</html>