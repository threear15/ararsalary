
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


    <title>DATASTIQ Digital Marketing Agency</title>
    <script src="assets/js/sweetalert.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
<script src="assets/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.v4.1.3.css">
    <link rel="stylesheet" type="text/css" href="../../assets/vendor/semantic-ui/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/datatables.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->

    <!-- @yield('styles') -->
    <link href="../../assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
</head>
<style type="text/css">
@media screen and (max-width: 600px){
    #me{
        overflow-x: scroll;
    }
}
    
</style>
<body oncontextmenu="return false;">




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
                    <a href="reports">
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
                                            <i class="ui icon user"></i> Add User</a>
                                        <a href="change-password.html" class="item">
                                            <i class="ui icon lock"></i> Change Password</a>
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
                        <h2 class="page-title"> REPORTS
                        </h2>
                    </div>

                    <div class="row">
                        <div class="box box-success">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-12" id="me">
                                        <table id="example" class="display responsive no-wrap" style="width:100%">
        <thead>
            <tr>
                <th>ID Number</th>
                <th>TIN Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Positon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
require '../../db.php';
$sql = 'SELECT * FROM dqreports_tbl';
$statement = $connection->prepare($sql);
$statement->execute();
$employee = $statement->fetchAll(PDO::FETCH_OBJ);
             ?>
            <?php foreach($employee as $person): ?>
            <tr>
                <td><?= $person->employee_id; ?></td>
                <td><?= $person->tin_number; ?></td>
                <td><?= $person->first_name; ?></td>
                <td><?= $person->last_name; ?></td>
                <td><?= $person->position; ?></td>
                <td class="align center">
                    <a href="profile/view/4.html" class="ui green icon mini basic button">
                     <i class="file icon"></i> View</a>
                    <a href="profile/edit/edit-details?id=<?= $person->id ?>" class="ui blue icon mini basic button">
                    <i class="edit icon"></i> Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_report?id=<?= $person->id ?>" class="ui red icon mini basic button">
                    <i class="trash icon"></i> Delete</a>
                    <a href="print-payslip?id=<?= $person->id ?>" class="ui teal icon mini basic button ">
                     <i class="archive icon"></i> Print</a>
                 
                   
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

<script src="../../assets/js/sweetalert.js"></script>
<script src="../../assets/js/sweetalert.min.js"></script>
<script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.min.v4.1.3.js"></script>
    <script src="../../assets/vendor/semantic-ui/semantic.min.js"></script>
    <script src="../../assets/js/bootstrap-notify.js"></script>
    <script src="../../assets/js/script.js"></script>

    <!-- @yield('scripts') -->
    <script src="../../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script type="text/javascript">
        /*$("#button-a").click(function(){
            swal("Hello Worlds");
        });*/
        document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
        $(document).ready(function() {
    $('#example').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 5 ],
            orderData: [ 5, 0 ]
        } ]
    } );
} );
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true,
                pageLength: 15,
                lengthChange: false,
                searching: true,
            });
        });

        $('.ui.dropdown.getemail').dropdown({
            onChange: function (value, text, $selectedItem) {
                $('select[name="name"] option').each(function () {
                    if ($(this).val() == value) {
                        var e = $(this).attr('data-e');
                        var r = $(this).attr('data-ref');
                        $('input[name="email"]').val(e);
                        $('input[name="ref"]').val(r);
                    };
                });
            }
        });

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