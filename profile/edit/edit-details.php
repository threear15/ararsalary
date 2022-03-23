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
                            <h2 class="page-title">Edit Employee Profile
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
if (isset($_POST['submit22'])) {
  $firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$civilstatus = $_POST['civilstatus'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$emailaddress = $_POST['emailaddress'];
$mobilenumber = $_POST['mobilenumber'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$birthplace = $_POST['birthplace'];
$homeaddress = $_POST['homeaddress'];
$company = $_POST['company'];
$department = $_POST['department'];
$jobposition = $_POST['jobposition'];
$idnumber = $_POST['idnumber'];
$companyemail = $_POST['companyemail'];
$employmenttype = $_POST['employmenttype'];
$employmentstatus = $_POST['employmentstatus'];
$datehired = $_POST['datehired'];
$dateregistered = $_POST['dateregistered'];
$tinnumber = $_POST['tinnumber'];
  $sql = 'UPDATE dqemp_tbl SET first_name=:firstname, middle_name=:middlename, last_name=:lastname, gender=:gender, civil_status=:civilstatus, height=:height, weight=:weight, email_address_personal=:emailaddress, mobile_number=:mobilenumber, age=:age, date_of_birth=:birthday, place_of_birth=:birthplace, home_address=:homeaddress, company=:company, department=:department, position=:jobposition, id_number=:idnumber, email_address_company=:companyemail, employment_type=:employmenttype, employment_status=:employmentstatus, date_hired=:datehired, date_registered=:dateregistered, tin_number=:tinnumber WHERE id=:id';

  $statement = $connection->prepare($sql);

    if ($statement->execute([':firstname' => $firstname, ':middlename' => $middlename, ':lastname' => $lastname, ':gender' => $gender, ':civilstatus' => $civilstatus, ':height' => $height, ':weight' => $weight, ':emailaddress' => $emailaddress, ':mobilenumber' => $mobilenumber, ':age' => $age, ':birthday' => $birthday, ':birthplace' => $birthplace, ':homeaddress' => $homeaddress, ':company' => $company, ':department' => $department, ':jobposition' => $jobposition, ':idnumber' => $idnumber, ':companyemail' => $companyemail, ':employmenttype' => $employmenttype, ':employmentstatus' => $employmentstatus, ':datehired' => $datehired, ':dateregistered' => $dateregistered, ':tinnumber' => $tinnumber, ':id' => $id])) {
   echo "<script>
            
        
        setTimeout(function() {
        swal({
            title: 'Successfully Updated',
            text: '',
            type: 'success',
        }, function() {
            window.location = '../../users';
        });
    }, 10);
            </script>";
  }else{
 echo "\nPDO::errorInfo():\n";
    print_r($statement->errorInfo());
}
  }
  
 ?>
                        <form  class="ui form custom" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                            <div class="col-md-6 float-left">
                                <div class="box box-success">
                                    <div class="box-header with-border">Personal Infomation</div>
                                    <div class="box-body">
                                        <div class="two fields">
                                            <div class="field">
                                                <label>First Name</label>
                                                <input type="text" class="notempty" name="firstname" value="<?= $person->first_name; ?>" required="">
                                            </div>
                                            <div class="field">
                                                <label>Middle Name</label>
                                                <input type="text" class="notempty" name="middlename" value="<?= $person->middle_name; ?>">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Last Name</label>
                                            <input type="text" class="notempty" name="lastname" value="<?= $person->last_name; ?>" required="">
                                        </div>
                                        <div class="field">
                                            <label>Gender</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="<?= $person->gender; ?>" selected=""></option>
                                                    <option value="MALE">MALE</option>
                                                    <option value="FEMALE">FEMALE</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">MALE</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="MALE">MALE</div>
                                                    <div class="item" data-value="FEMALE">FEMALE</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Civil Status</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="civilstatus">
                                                    <option value="">Select Gender</option>
                                                    <option value="<?= $person->civil_status; ?>" selected=""></option>
                                                    <option value="SINGLE">SINGLE</option>
                                                    <option value="ANNULED">ANNULED</option>
                                                    <option value="WIDOWED">WIDOWED</option>
                                                    <option value="LEGALLY SEPARATED">ANNULLEGALLY SEPARATEDED</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">MALE</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="SINGLE">SINGLE</div>
                                                    <div class="item" data-value="ANNULED">ANNULED</div>
                                                    <div class="item" data-value="WIDOWED">WIDOWED</div>
                                                    <div class="item" data-value="LEGALLY SEPARATED">LEGALLY SEPARATED</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="two fields">
                                            <div class="field">
                                                <label>Height
                                                    <span class="help">(cm)</span>
                                                </label>
                                                <input type="text" name="height" value="<?= $person->height; ?>" placeholder="000" class="notempty">
                                            </div>
                                            <div class="field">
                                                <label>Weight
                                                    <span class="help">(pounds)</span>
                                                </label>
                                                <input type="text" name="weight" value="<?= $person->weight; ?>" placeholder="000" class="notempty">
                                            </div>
                                        </div>

                                        <div class="two fields">
                                            <div class="field">
                                                <label>Email Address (Personal)</label>
                                                <input type="email" name="emailaddress" value="<?= $person->email_address_personal; ?>" required="" class="lowercase notempty">
                                            </div>
                                            <div class="field">
                                                <label>Mobile Number</label>
                                                <input type="text" class="uppercase notempty" name="mobilenumber" value="<?= $person->mobile_number; ?>">
                                            </div>
                                        </div>
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Age</label>
                                                <input type="text" name="age" value="<?= $person->age; ?>" placeholder="00" class="notempty">
                                            </div>
                                            <div class="field">
                                                <label>Date of Birth</label>
                                                <input type="date" name="birthday" value="<?= $person->date_of_birth; ?>" class="airdatepicker notempty" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Place of Birth</label>
                                            <input type="text" class="notempty" name="birthplace" value="<?= $person->place_of_birth; ?>" placeholder="City, Province, Country">
                                        </div>
                                        <div class="field">
                                            <label>Home Address</label>
                                            <input type="text" class="notempty" name="homeaddress" value="<?= $person->home_address; ?>" placeholder="House/Unit Number, Building, Street, City, Province, Country">
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
                            <div class="col-md-6 float-left">
                                <div class="box box-success">
                                    <div class="box-header with-border">Employee Details</div>
                                    <div class="box-body">
                                        <h4 class="ui dividing header">Designation</h4>
                                        <div class="field">
                                            <label>Company</label>
                                            <div class="ui search dropdown uppercase selection notempty">
                                                <select name="company">
                                                    <option value="">Select Company</option>
                                                    <option value="<?= $person->company;?>" selected=""></option>
                                                    <option value="DATASTIQ"> DATASTIQ</option>
                                                    <option value="GOOGLE"> GOOGLE</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <input class="search" autocomplete="off" tabindex="0">
                                                <div class="text">DATASTIQ</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="DATASTIQ"> DATASTIQ</div>
                                                    <div class="item active selected" data-value="GOOGLE"> GOOGLE</div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Department</label>
                                           <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="department">
                                                    <option value="">Select Department</option>
                                                    <option value="<?= $person->department; ?>" selected=""></option>
                                                    <option value="GENERAL">GENERAL</option>
                                                    <option value="SALES">SALES</option>
                                                    <option value="TECHNICAL SUPPORT">TECHNICAL SUPPORT</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">GENERAL</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="GENERAL">GENERAL</div>
                                                    <div class="item" data-value="SALES">SALES</div>
                                                    <div class="item" data-value="TECHNICAL SUPPORT">TECHNICAL SUPPORT</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Job Title / Position</label>
                                            <div class="ui search dropdown selection uppercase jobposition notempty">
                                                <input type="hidden" name="jobposition" value="<?= $person->position; ?>" class="notempty">
                                                <i class="dropdown icon"></i>
                                                <input class="search" autocomplete="off" tabindex="0">
                                                <div class="text">CEO</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item">CEO</div>
                                                    <div class="item">CMO</div>
                                                    <div class="item">HR</div>
                                                    <div class="item">WEB DEVELOPER</div>
                                                    <div class="item">GRAPHIC DESIGNER</div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>ID Number</label>
                                            <input type="text" class="uppercase notempty" name="idnumber" value="<?= $person->id_number; ?>">
                                        </div>
                                        <div class="field">
                                            <label>TIN Number</label>
                                            <input type="text" class="uppercase notempty" name="tinnumber" value="<?= $person->tin_number; ?>">
                                        </div>
                                        <div class="field">
                                            <label>Email Address (Company)</label>
                                            <input type="email" name="companyemail" value="<?= $person->email_address_company; ?>" class="lowercase notempty">
                                        </div>
                                        <h4 class="ui dividing header">Employment Information</h4>
                                        <div class="field">
                                            <label>Employment Type</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="employmenttype">
                                                    <option value="">Select Type</option>
                                                    <option value="<?= $person->employment_type; ?>" selected=""></option>
                                                    <option value="Regular">Regular</option>
                                                    <option value="Trainee">Trainee</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">Regular</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="Regular">Regular</div>
                                                    <div class="item" data-value="Trainee">Trainee</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Employment Status</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="employmentstatus">
                                                    <option value="">Select Status</option>
                                                    <option value="<?= $person->employment_status; ?>" selected=""></option>
                                                    <option value="Active">Active</option>
                                                    <option value="Archived">Archived</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">Active</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="Active">Active</div>
                                                    <div class="item" data-value="Archived">Archived</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Official Start Date</label>
                                            <input type="date" name="datehired" value="<?= $person->date_hired; ?>" class="airdatepicker notempty" placeholder="Date">
                                        </div>
                                        <div class="field">
                                            <label>Date Regularized</label>
                                            <input type="date" name="dateregistered" value="<?= $person->date_registered; ?>" class="airdatepicker notempty" placeholder="Date">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 float-left">
                                <div class="action align-right">
                                    <button type="submit" name="submit22" class="ui green button small">
                                        <i class="ui checkmark icon"></i> Update</button>
                                    <a href="../../employees" class="ui grey button small">
                                        <i class="ui times icon"></i> Cancel</a>
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