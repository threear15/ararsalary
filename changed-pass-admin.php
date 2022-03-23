
<?php 
session_start();
if(!isset($_SESSION['Role'])){
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
<?php include"link_header.php"; ?>

<body>

    <div class="wrapper">

        <?php include"sidebar.php"; ?>

        <div id="body" class="active">
            
            <?php include"header.php"; ?>

            <div class="content">

                <!-- @yield('content') -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Update Password</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-content">

                                    <?php
if(isset($_POST['submit'])){
    require 'db.php';
$id = $_SESSION['id'];
$password = $_POST['newpassword'];
$pass_hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
$sql = 'SELECT * FROM dqadmin_tbl WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
$sql = 'UPDATE dqadmin_tbl SET password=:pass_hash WHERE id=:id';

  $statement = $connection->prepare($sql);

    if ($statement->execute([':pass_hash' => $pass_hash, ':id' => $id])) {
   echo "<script>
            
        
        setTimeout(function() {
        swal({
            title: 'Success ! Please re-login your account',
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
                        </form>
                                </div>
                                <div class="box-footer">
                                    <button class="ui positive button" type="submit" name="submit">
                                        <i class="ui checkmark icon"></i> Update</button>
                                    <a class="ui grey button" href="dashboard.html">
                                        <i class="ui times icon"></i> Cancel</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include"link_footer.php"; ?>