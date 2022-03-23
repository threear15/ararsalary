
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

<body>

    <div class="wrapper">

       <?php include"sidebar.php"; ?>

        <div id="body" class="active">
            <?php   include"header.php"; ?>

            <div class="content">

                <!-- @yield('content') -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua">
                                    <i class="ui icon user circle"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">EMPLOYEES</span>
                                    <div class="progress-group">
                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                                        </div>
                                        <div class="stats_d">
                                    <?php include"function.php";
                                    count_employees();
                                     ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="display: none;">
                            <div class="info-box">
                                <span class="info-box-icon bg-orange">
                                    <i class="ui icon home"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">LEAVES</span>
                                    <div class="progress-group">
                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-orange" style="width: 100%"></div>
                                        </div>
                                        <div class="stats_d">
                                            <table style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>Approved</td>
                                                        <td> 8 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pending</td>
                                                        <td> 1 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="display: none;">
                            <div class="info-box">
                                <span class="info-box-icon bg-green">
                                    <i class="ui icon clock outline"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">ATTENDANCE</span>
                                    <div class="progress-group">
                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                                        </div>
                                        <div class="stats_d">
                                            <table style="width: 100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>Online</td>
                                                        <td> 1 </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Offline</td>
                                                        <td> 24 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="display: none">

                        <div class="col-md-4">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Newest Employees</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table class="table responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Name</th>
                                                <th class="text-left">Position</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left name-title">BROWN, MIA</td>
                                                <td class="text-left">ACCOUNTANT I</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">ESTELLE, HOWARD</td>
                                                <td class="text-left">ADMINISTRATIVE ASSISTANT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">STEANS, TYRONE</td>
                                                <td class="text-left">ACCOUNTANT I</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">SMITH, LEIGH ANN</td>
                                                <td class="text-left">ADMINISTRATIVE ASSISTANT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">CLAYTON, RICK</td>
                                                <td class="text-left">IT SUPPORT</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">BECKER, RENEE</td>
                                                <td class="text-left">DATABASE ADMINISTRATOR</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">KING, JANET</td>
                                                <td class="text-left">PRESIDENT &amp; CEO</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">SOTO, JULIA</td>
                                                <td class="text-left">IT SUPPORT</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Recent Leaves</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table class="table responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Name</th>
                                                <th class="text-left">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left name-title">SOTO, JULIA</td>
                                                <td class="text-left">12/25/2018</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">SMITH, LEIGH ANN</td>
                                                <td class="text-left">12/21/2018</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">BECKER, RENEE</td>
                                                <td class="text-left">12/17/2018</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">BROWN, MIA</td>
                                                <td class="text-left">12/06/2018</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">GALIA, LISA</td>
                                                <td class="text-left">03/01/2019</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">QUINN, SEAN</td>
                                                <td class="text-left">02/21/2019</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">BACONG, ALEJANDRO</td>
                                                <td class="text-left">02/20/2019</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left name-title">FOSS, JASON</td>
                                                <td class="text-left">01/08/2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Recent Attendance</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <table class="table responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-left">Name</th>
                                                <th class="text-left">Type</th>
                                                <th class="text-left">Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="name-title">QUINN, SEAN A</td>
                                                <td>Time-Out</td>
                                                <td>05:11:05 PM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">QUINN, SEAN A</td>
                                                <td>Time-In</td>
                                                <td>09:27:31 AM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">QUINN, SEAN A</td>
                                                <td>Time-Out</td>
                                                <td>05:03:00 PM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">QUINN, SEAN A</td>
                                                <td>Time-In</td>
                                                <td>08:00:00 AM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">SOTO, JULIA </td>
                                                <td>Time-Out</td>
                                                <td>05:01:00 PM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">SOTO, JULIA </td>
                                                <td>Time-In</td>
                                                <td>08:00:00 AM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">GALIA, LISA </td>
                                                <td>Time-Out</td>
                                                <td>06:10:00 PM</td>
                                            </tr>

                                            <tr>
                                                <td class="name-title">GALIA, LISA </td>
                                                <td>Time-In</td>
                                                <td>09:05:00 AM</td>
                                            </tr>

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

  <?php   include"link_footer.php"; ?>
</body>

</html>