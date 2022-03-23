<?php 
session_start();
if(isset($_SESSION['Role'])){
    header("Location:employees");
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
							<p class="lead"> Security Section </p>
						</div>
						<?php
if(isset($_POST['submit'])){
	require 'db.php';
$dqkeyword = $_POST['dqkeyword'];
$phone = $_POST['phone'];
$sql = 'SELECT * FROM dqadmin_tbl WHERE phone = :phone' ;
$statement = $connection->prepare($sql);
$statement->execute([':phone' => $phone]);
$row = $statement->fetch(PDO::FETCH_ASSOC);
if(!empty($row)) {
	
	$_SESSION['phone'] = $row['phone'];
        // check if the hashed row password
        if(password_verify($dqkeyword, $row['dq_keyword'])) {

            echo "
			<script>
			
        
        setTimeout(function() {
        swal({
            title: 'Successfully Verified',
            text: '',
            type: 'success'
        }, function() {
            window.location = 'changedpass';
        });
    }, 1);
			</script>
		";
        }else {
        echo "
			<script>
			
        
        setTimeout(function() {
        swal({
            title: 'Invalid key',
            text: '',
            type: 'error'
        }, function() {
            window.location = 'forgotunset';
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
            window.location = 'forgotpass';
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
									<label for="email" class="color-white">Datastiq Keyword</label>
									<input  type="password" class="" name="dqkeyword" placeholder="Datastiq Keyword" required autofocus>

									<!-- <span class="help-block">
                                        <strong></strong>
                                    </span> -->
								</div>
							</div>
							<div class="fields">
								<div class="sixteen wide field">
									<label for="password" class="color-white">Phone Number</label>
									<input id="password" type="password"  name="phone" placeholder="Phone Number" required>

									<!-- <span class="help-block">
                                        <strong></strong>
                                    </span> -->
								</div>
							</div>

							<button type="submit" name="submit" class="ui green button large fluid"> VERIFY</button>
							<p class="lead"><a href="logout.php" class="ui red button large fluid">GO BACK</a></p>
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