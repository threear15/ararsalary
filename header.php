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
                                    <i class="ui icon user outline"></i>Hello, <?php echo $_SESSION['Role'];?>
                                    <i class="dropdown icon"></i>
                                    <div class="menu" tabindex="-1">
                                        <a href="add-admin" class="item">
                                            <i class="ui icon user"></i> Add User</a>
                                        <a href="changed-pass-admin" class="item">
                                            <i class="ui icon lock"></i> Change Password</a>
                                        <div class="divider"></div>
                                        <a href="logout" class="item">
                                            <i class="ui icon power"></i> Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>