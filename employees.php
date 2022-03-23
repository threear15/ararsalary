
<?php 
session_start();
if(!isset($_SESSION['Role'])){
    header("Location:login");
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

<?php   include"link_header.php" ?>
<style type="text/css">
@media screen and (max-width: 600px){
    #me{
        overflow-x: scroll;
    }
}
    
</style>
<body oncontextmenu="return false;">

    <div class="ui modal medium add">
        <div class="header">Add New Employee</div>
        <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>

                    <div class="row">

                        <form class="ui form custom" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <!-- registration function -->
                            <?php
                            include"function.php";
                            register();
                             ?>
                            <div class="col-md-6 float-left">
                                <div class="box box-success">
                                    <div class="box-header with-border">Personal Infomation</div>
                                    <div class="box-body">
                                        <div class="two fields">
                                            <div class="field">
                                                <label>First Name</label>
                                                <input type="text" class="notempty" name="firstname" required="">
                                            </div>
                                            <div class="field">
                                                <label>Middle Name</label>
                                                <input type="text" class="notempty" name="middlename" >
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Last Name</label>
                                            <input type="text" class="notempty" name="lastname" required="">
                                        </div>
                                        <div class="field">
                                            <label>Gender</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="MALE" selected="">MALE</option>
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
                                                    <option value="">Select Civil Status</option>
                                                    <option value="SINGLE" selected="">SINGLE</option>
                                                    <option value="MARRIED">MARRIED</option>
                                                    <option value="ANULLED">ANULLED</option>
                                                    <option value="WIDOWED">WIDOWED</option>
                                                    <option value="LEGALLY SEPARATED">LEGALLY SEPARATED</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">SINGLE</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="SINGLE">SINGLE</div>
                                                    <div class="item" data-value="MARRIED">MARRIED</div>
                                                    <div class="item" data-value="ANULLED">ANULLED</div>
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
                                                <input type="text" name="height" placeholder="160cm" class="notempty">
                                            </div>
                                            <div class="field">
                                                <label>Weight
                                                    <span class="help">(kg)</span>
                                                </label>
                                                <input type="text" name="weight" placeholder="60kg" class="notempty">
                                            </div>
                                        </div>

                                        <div class="two fields">
                                            <div class="field">
                                                <label>Email Address (Personal)</label>
                                                <input type="email" name="emailaddress" required="" class="lowercase notempty">
                                            </div>
                                            <div class="field">
                                                <label>Mobile Number</label>
                                                <input type="text" class="uppercase notempty" name="mobilenumber">
                                            </div>
                                        </div>
                                        <div class="two fields">
                                            <div class="field">
                                                <label>Age</label>
                                                <input type="text" name="age" placeholder="00" class="notempty">
                                            </div>
                                            <div class="field">
                                                <label>Date of Birth</label>
                                                <input type="date" name="birthday" class="airdatepicker notempty" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Place of Birth</label>
                                            <input type="text" class="notempty" name="birthplace" placeholder="City, Province, Country">
                                        </div>
                                        <div class="field">
                                            <label>Home Address</label>
                                            <input type="text" class="notempty" name="homeaddress"  placeholder="House/Unit Number, Building, Street, City, Province, Country">
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
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="company">
                                                    <option value="">Select Gender</option>
                                                    <option value="DATASTIQ" selected="">DATASTIQ</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">DATASTIQ</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="DATASTIQ">DATASTIQ</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Department</label>
                                            <div class="ui search dropdown uppercase department selection notempty">
                                                <select name="department">
                                                    <option value="">Select Department</option>
                                                    <option value="SALES"> SALES</option>
                                                    <option value="TECHNICAL SUPPORT"> TECHNICAL SUPPORT</option>
                                                    <option value="GENERAL" selected=""> GENERAL</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <input class="search" autocomplete="off" tabindex="0">
                                                <div class="text">IT/IS</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item" data-value="SALES"> SALES</div>
                                                    <div class="item" data-value="TECHNICAL SUPPORT"> TECHNICAL SUPPORT</div>
                                                    <div class="item active selected" data-value="GENERAL"> GENERAL</div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label>Job Title / Position</label>
                                            <div class="ui search dropdown selection uppercase jobposition notempty">
                                                <input type="hidden" name="jobposition" value="CEO" class="notempty">
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
                                            <input type="text" class="uppercase notempty" name="idnumber">
                                        </div>
                                        <div class="field">
                                            <label>TIN Number</label>
                                            <input type="text" class="uppercase notempty" name="tinnumber">
                                        </div>
                                        <div class="field">
                                            <label>Email Address (Company)</label>
                                            <input type="email" name="companyemail" class="lowercase notempty">
                                        </div>
                                        <h4 class="ui dividing header">Employment Information</h4>
                                        <div class="field">
                                            <label>Employment Type</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="employmenttype">
                                                    <option value="">Select Type</option>
                                                    <option value="Regular" selected="">Regular</option>
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
                                                    <option value="Active" selected="">Active</option>
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
                                            <label>Date Hired</label>
                                            <input type="date" name="datehired" value=" 01/06/2018 " class="airdatepicker notempty" placeholder="Date">
                                        </div>
                                        <div class="field">
                                            <label>Date Registered</label>
                                            <input type="date" name="dateregistered" value=" 03/05/2018 " class="airdatepicker notempty" placeholder="Date">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 float-left">
                                <div class="action align-right">
                                    <button type="submit" name="submit" class="ui green button small">
                                        <i class="ui checkmark icon"></i> Update</button>
                                    <a href="employees" class="ui grey button small">
                                        <i class="ui times icon"></i> Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>


    <div class="wrapper">

        <?php   include"sidebar.php"; ?>

        <div id="body" class="active">

            <?php   include"header.php"; ?>

            <div class="content">

                <!-- @yield('content') -->
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="page-title">EMPLOYEE
                            
                            <button class="ui positive button mini offsettop5 btn-add float-right">
                                <i class="ui icon plus"></i>Add</button>
                        </h2>
                    </div>

                    <div class="row">
                        <div class="box box-success" >
                            <div class="box-body" >
                                <div class="row">
                                    <div class="col-sm-12" id="me">
                                        <table id="example" class="display responsive no-wrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Number</th>
                <th>Status</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Positon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody >
            <?php 
require 'db.php';
$sql = 'SELECT * FROM dqemp_tbl';
$statement = $connection->prepare($sql);
$statement->execute();
$employee = $statement->fetchAll(PDO::FETCH_OBJ);
             ?>
            <?php foreach($employee as $person): ?>
            <tr>
                <td><?= $person->id_number; ?></td>
                <td><?= $person->employment_status; ?></td>
                <td><?= $person->first_name; ?></td>
                <td><?= $person->last_name; ?></td>
                <td><?= $person->position; ?></td>
                <td class="align center">
                    <a href="profile/view/4.html" class="ui green icon mini basic button" style="display: none" onclick="return false;">
                     <i class="file icon"></i> View</a>
                    <a href="profile/edit/edit-details?id=<?= $person->id ?>" class="ui blue icon mini basic button">
                    <i class="edit icon"></i> Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete?id=<?= $person->id ?>" class="ui red icon mini basic button">
                    <i class="trash icon"></i> Delete</a>
                     <a href="reports/employee/employee-payslip?id=<?= $person->id ?>" class="ui teal icon mini basic button ">
                     <i class="archive icon"></i> Generate Payslip</a>
                 
                   
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

<?php   include"link_footer.php"; ?>