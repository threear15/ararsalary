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
                            <h2 class="page-title">Add New Admin</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-content">
                            
                                    <form class="ui form" method="post" accept-charset="utf-8">
                                        <?php
                            include"function.php";
                            register_admin();
                             ?>
                                        <div class="field">
                                            <label>User Name</label>
                                            <input type="text" name="username" class="notempty" required="">
                                        </div>
                                        <div class="field">
                                            <label>Password</label>
                                            <input type="text" name="password" class="notempty" required="">
                                        </div>
                                        <div class="field">
                                            <label>Phone</label>
                                            <input type="number" name="phone" class="notempty" required="">
                                        </div>
                                        <div class="field">
                                            <input type="hidden" name="dqkeyword" class="notempty" value="lovemore!">
                                        </div>
                                        <div class="field">
                                            <label>Role</label>
                                            <div class="ui dropdown uppercase selection notempty" tabindex="0">
                                                <select name="role">
                                                    <option value="">Select Role</option>
                                                    <option value="Admin" selected="">Admin</option>
                                                </select>
                                                <i class="dropdown icon"></i>
                                                <div class="text">Admin</div>
                                                <div class="menu" tabindex="-1">
                                                    <div class="item active selected" data-value="Admin">Admin</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                             <div class="box-footer">
                                    <button class="ui positive button" type="submit" name="add-admin">
                                        <i class="ui checkmark icon"></i> ADD</button>
                                    <a class="ui grey button" href="employees">
                                        <i class="ui times icon"></i> Cancel</a>
                                </div>
                                    </form>
                                </div>
                               

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.v4.1.3.js"></script>
    <script src="assets/vendor/semantic-ui/semantic.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- @yield('scripts') -->

</body>

</html>