<?php 
session_start();
if(!isset($_SESSION['Role'])){
    header("Location:../../login");
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
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <title>Smart Timesheet</title>
    <script src="../../assets/js/sweetalert.js"></script>
<link rel="stylesheet" type="text/css" href="../../assets/css/sweetalert.css">
<script src="../../assets/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.v4.1.3.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/semantic-ui/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="../../assets/js/html5shiv.js></script>
            <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->

    <!-- @yield('styles') -->
</head>

<body>

    <div class="wrapper">

        <nav id="sidebar" class="active">
            <div class="sidebar-header bg-lightblue">
                <div class="logo">
                    <a href="/" class="simple-text">
                        <img src="../../assets/images/img/datastiq.png">
                    </a>
                </div>
            </div>

            <ul class="list-unstyled components">
                <li class="">
                    <a href="../../dashboard">
                        <i class="ui icon sliders horizontal"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="">
                    <a href="../../employees">
                        <i class="ui icon users"></i>
                        <p>Employees</p>
                    </a>
                </li>

                <li class="">
                    <a href="../../reports/employee/reports">
                        <i class="ui icon chart bar outline"></i>
                        <p>Reports</p>
                    </a>
                </li>

            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-light bg-lightblue">
                <div class="container-fluid">

                    <button type="button" id="slidesidebar" class="ui icon button btn-light-outline">
                        <i class="ui icon bars"></i> Menu
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto navmenu">
                           <!-- <li class="nav-item">
                                <div class="ui pointing link dropdown item" tabindex="0">
                                    <i class="ui icon th"></i> Quick Access
                                    <i class="dropdown icon"></i>
                                    <div class="menu" tabindex="-1">
                                        <a href="employees-new.html" class="item">
                                            <i class="ui icon user plus"></i> Add Employee</a>
                                        <a href="clock.html" target="_blank" class="item">
                                            <i class="ui icon clock outline"></i> Clock In/Out</a>
                                        <div class="divider"></div>
                                        <a href="fields/company.html" class="item">
                                            <i class="ui icon university"></i> Company</a>
                                        <a href="fields/department.html" class="item">
                                            <i class="ui icon cubes"></i> Department</a>
                                        <a href="fields/jobtitle.html" class="item">
                                            <i class="ui icon pencil alternate"></i> Job Title</a>
                                        <a href="fields/leavetype.html" class="item">
                                            <i class="ui icon calendar alternate outline"></i> Leave Type</a>
                                    </div>
                                </div>
                            </li>-->
                            <li class="nav-item">
                                <div class="ui pointing link dropdown item" tabindex="0">
                                    <i class="ui icon user outline"></i><?php echo $_SESSION['Role'];?>
                                    <i class="dropdown icon"></i>
                                    <div class="menu" tabindex="-1">
                                        <a href="update-user.html" class="item">
                                            <i class="ui icon user"></i> Update User</a>
                                        <a href="change-password.html" class="item">
                                            <i class="ui icon lock"></i> Change Password</a>
                                        <a href="personal/dashboard.html" target="_blank" class="item">
                                            <i class="ui icon sign-in"></i> Switch to MyAccount</a>
                                        <div class="divider"></div>
                                        <a href="../../logout.php" class="item">
                                            <i class="ui icon power"></i> Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">

                <!-- @yield('content') -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Generate Payslip
                                <a href="../../employees" class="ui basic blue button mini offsettop5 float-right">
                                    <i class="ui icon chevron left"></i>Return</a>
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                                                <?php
require '../../db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM dqemp_tbl WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
 ?>
<?php 
if(isset($_POST['compute'])){
$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];
$sss = $_POST['sss'];
$philhealth = $_POST['philhealth'];
$pagibig = $_POST['pagibig'];
$addons = $_POST['addons'];
$basicsalary = $_POST['basicsalary'];
$totaldeduction = $sss + $philhealth + $pagibig;
$total_earnings = $basicsalary + $addons;
$netpay = $basicsalary + $addons - $totaldeduction;
$netpay1 = number_format($netpay, 2);
$netpay2 = $netpay1;

}
 ?>
 <?php  
include"../../function.php";
reports();
  ?>
                        <form  class="ui form custom" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            <div class="col-md-12 float-left">
                                <div class="box box-success">
                                    <div class="box-header with-border" style="text-transform: uppercase"><?php echo"$person->first_name $person->middle_name $person->last_name";?>'s PAYSLIP</div>
                                    <div class="box-body">
                                        <div class="three fields">
                                            <div class="field" style="margin-right: 5px">
                                                <label>First Name</label>
                                                <input type="text" class="uppercase notempty" name="firstname" value="<?= $person->first_name; ?>" required="" readonly>
                                            </div>
                                            <div class="field">
                                                <label>Middle Name</label>
                                                <input type="text" class="uppercase notempty" name="middlename" value="<?= $person->middle_name; ?>" readonly>
                                            </div>
                                            <div class="field">
                                                <label>Last Name</label>
                                                <input type="text" class="uppercase notempty" name="lastname" value="<?= $person->last_name; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="three fields">
                                            <div class="field" style="margin-right: 5px">
                                                <label>Employee ID</label>
                                                <input type="text" class="uppercase notempty" name="idnumber" value="<?= $person->id_number; ?>" required="" readonly> 
                                            </div>
                                            <div class="field">
                                                <label>TIN NUMBER</label>
                                                <input type="text" class="uppercase notempty" name="tinnumber" value="<?= $person->tin_number; ?>" readonly>
                                            </div>
                                            <div class="field">
                                                <label>POSITION</label>
                                                <input type="text" class="uppercase notempty" name="position" value="<?= $person->position; ?>" readonly>
                                            </div>
                                        </div>
                                        <div style="text-align:center; letter-spacing: 5px; font-weight: bolder;margin: 10px;">- - - - - - - - - - - - - - - - - - DEDUCTIONS - - - - - - - - - - - - - - - - - </div>
                                        <div class="four fields">
                                            <div class="field" style="margin-right: 5px">
                                                <label>SSS Contribution (Ex: 500 , 1000)</label>
                                                <input type="text" class="uppercase notempty prc" name="sss" required="" placeholder="" value="<?php error_reporting(0); echo"$sss"; ?>">
                                            </div>
                                            <div class="field" style="margin-right: 5px">
                                                <label>PHILHEALTH (Ex: 500 , 1000)</label>
                                                <input type="text" class="uppercase notempty prc" name="philhealth" value="<?php error_reporting(0); echo"$philhealth"; ?>">
                                            </div>
                                            <div class="field">
                                                <label>PAG-IBIG (Ex: 500 , 1000)</label>
                                                <input type="text" class="uppercase notempty prc" name="pagibig" value="<?php error_reporting(0); echo"$pagibig"; ?>">
                                            </div>
                                            <div class="field">
                                                <label>TOTAL DEDUCTION</label>
                                                <input type="text" class="uppercase notempty prc" name="totaldeduction" value="<?php error_reporting(0); echo"$totaldeduction"; ?>" readonly>
                                            </div>
                                        </div>
                                        <div style="text-align:center; letter-spacing: 5px; font-weight: bolder;margin: 10px;">- - - - - - - - - - - - - - - - - - DATE ISSUED - - - - - - - - - - - - - - - - - </div>
                                        <div class="two fields">
                                            <div class="field" style="margin-right: 5px">
                                                <label>From</label>
                                                <input type="date" class="uppercase notempty" name="datefrom" value="<?php error_reporting(0); echo"$datefrom"; ?>" required="" placeholder="">
                                            </div>
                                            <div class="field">
                                                <label>To</label>
                                                <input type="date" class="uppercase notempty" name="dateto" value="<?php error_reporting(0); echo"$dateto"; ?>">
                                            </div>
                                        </div>
                                        <div style="text-align:center; letter-spacing: 5px; font-weight: bolder;margin: 10px;">- - - - - - - - - - - - - - - - - - EARNINGS - - - - - - - - - - - - - - - - - </div>
                                        <div class="three fields">
                                            <div class="field" style="margin-right: 5px">
                                                <label>Add Ons (Ex: 15000)</label>
                                                <input type="text" class="uppercase notempty prc" name="addons"  required="" placeholder="" value="<?php error_reporting(0); echo"$addons"; ?>">
                                            </div>
                                            <div class="field" style="margin-right: 5px">
                                                <label>Basic Salary (Ex: 15000)</label>
                                                <input type="number" class="uppercase notempty prc" name="basicsalary" required="" placeholder="" value="<?php error_reporting(0); echo"$basicsalary"; ?>">
                                            </div>
                                            <div class="field" style="margin-right: 5px">
                                                <label>TOTAL EARNINGS</label>
                                                <input type="text" class="uppercase notempty prc" name="totalearnings" placeholder="" value="<?php error_reporting(0); echo"$total_earnings"; ?>" readonly>
                                            </div>
                                             
                                        </div>
                                        <div class="three fields">
                                            <div class="field"></div>
                                    <div class="field">
                                                <label>NET PAY</label>
                                                <input type="text" name="netpay" class="prc" value="<?php     error_reporting(0); echo "$netpay2";?> " readonly>
                                            </div>
                                            <div class="field"></div>
                                        </div>
                                        
                                    
                              


                                        
                                        
                                        
                                        
                                        <!--<div class="field">
                                            <label>Upload Profile photo</label>
                                            <input class="ui file upload" value="" id="imagefile" name="image" type="file" accept="image/png, image/jpeg, image/jpg"
                                                onchange="validateFile()">
                                        </div>-->
                                        <br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 float-left">
                                <div class="action align-right">
                                    <button name="compute" class="ui green button small">
                                        <i class="ui checkmark icon"></i> COMPUTE</button>
                                         <a href="../../employees" class="ui grey button small">
                                        <i class="ui times icon"></i> Cancel</a>
                                         <button type="submit" name="submit22" class="ui green button small">
                                        <i class="ui checkmark icon"></i> SAVE</button>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../../assets/js/sweetalert.js"></script>
<script src="../../assets/js/sweetalert.min.js"></script>
    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.v4.1.3.js"></script>
    <script src="../../assets/vendor/semantic-ui/semantic.min.js"></script>
    <script src="../../assets/js/bootstrap-notify.js"></script>
    <script src="../../assets/js/script.js"></script>

    <!-- @yield('scripts') -->

</body>

</html>