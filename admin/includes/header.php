<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Eclipse Gym MIS</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->

    <!-- Local Fonts and Icons -->
    <link href="../material-design-icons-master/iconfont/material-icons.css" rel="stylesheet"/>

    <script src="canvas/jquery.min.js"></script>

    <script src="canvas/jquery.canvasjs.min.js"></script>
    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>


    <!-- Dropzone Css -->


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet">
        <!-- JQuery DataTable Css -->
    <link href="../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />

    <style type="text/css">
        @font-face {
            font-family: TickingTimebomBB;
        }



#clock{
    font-size:30px;
    color:#7FFF00;
    padding-bottom:-200px;
    text-align:center;


}






    </style>

    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
</head>

<body class="theme-black">
    <!-- Page Loader -->
  <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar" id="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                 <img src="../logo.png" class="pull-left" style="height: 15%; width: 15%; margin-right: 20px;">
                <a class="navbar-brand col-light-green" href="index.php"> MANAGEMENT INFORMATION SYSTEM
                </a>
                <div id="clock"></div>



            </div>
        </div>
    </nav>


    <!-- <script type="text/javascript">

        function showTime(){
            var date = new Date();
            var h = date.getHours();
            var m = date.getMinutes();
            var s = date.getSeconds();
            var day = date.getDate();
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var session = "AM";

            if(h == 0){
                h = 12;
            }
            if(h > 12){
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;


            //Datetime
            // var date = new Date();
            var mon = date.getMonth();
            var day = date.getDate();
            var yr = date.getFullYear();
            var monthNames = ["January", "February", "March", "April", "May", "June",
                              "July", "August", "September", "October", "November", "December" ];
            var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            var finalDATE = monthNames[date.getMonth()] + " "+day+ ","+yr

            var time = h + ":" + m + ":" + s + " " + session+ "  -  " + monthNames[date.getMonth()] + " "+day+ ","+yr+"("days[date.getDay()")"];
            document.getElementById("clock").innerHTML = time;




            setTimeout(showTime, 1000);
        }
        showTime();



    </script> -->
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info" style="height:15%;">
                <div class="image">
                    <img src="../assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container pull-right">

                      <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 25px;">ADMINISTRATOR</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="../logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu" style="height: 85%;">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active hidden">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="attendance.php">
                            <i class="material-icons">queue</i>
                            <span>Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle";>
                            <i class="material-icons">group</i>
                            <span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="Client-Profile.php">
                                <i class="material-icons">verified_user</i>
                                <span style="margin-top:8px;">Profiles</span>
                                </a>
                                <a href="Client-Transaction.php">
                                <i class="material-icons">credit_card</i>
                                <span style="margin-top:8px;">Transaction</span>
                                </a>
                                <a href="Client-Report-Menu.php">
                                <i class="material-icons">view_list</i>
                                <span style="margin-top:8px;">Client Reports</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle";>
                            <i class="material-icons">event_note</i>
                            <span>Studio Class</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="StudioClass-Sessions.php">
                                <i class="material-icons">alarm_add</i>
                                <span style="margin-top:8px;">Sessions</span>
                                </a>
                                <!-- <a href="StudioClass-Schedule.php">
                                <i class="material-icons">alarm_add</i>
                                <span style="margin-top:8px;">Schedules</span>
                                </a> -->
                                <a href="StudioClass-Report-Menu.php">
                                <i class="material-icons">view_list</i>
                                <span style="margin-top:8px;">Class Reports</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle";>
                            <i class="material-icons">fitness_center</i>
                            <span>Personal Training</span>
                        </a>
                        <ul class="ml-menu">
                            <li>

                                <a href="PT-ContractsFinal.php">
                                <i class="material-icons">perm_contact_calendar</i>
                                <span style="margin-top:8px;">Contracts</span>
                                </a>
                                <a href="PT-Report-Menu.php">
                                <i class="material-icons">view_list</i>
                                <span style="margin-top:8px;">Personal Training Reports</span>
                                </a>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle";>
                            <i class="material-icons">assignment</i>
                            <span>Amenities</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="Amenities-GymTowels.php">
                                <i class="material-icons">exposure</i>
                                <span style="margin-top:8px;">Activities</span>
                                </a>
                                <a href="Amenities-Equipments.php">
                                <i class="material-icons">lock</i>
                                <span style="margin-top:8px;">Records</span>
                                </a>
                                <a href="Amenities-Report-Menu.php">
                                <i class="material-icons">view_list</i>
                                <span style="margin-top:8px;">Amenity Reports</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">settings</i>
                                    <span style="margin-top:8px;">Maintenance</span>
                        </a>
                        <ul class="ml-menu">
                                    <li>
                                        <a href="PT-Coaches.php">Coaches</a>
                                    </li>
                                    <li>
                                        <a href="Maintenance-StudioClass.php">Studio Class</a>
                                    </li>
                                    <li>
                                        <a href="Maintenance-MembershipOptions.php">Membership Options</a>
                                    </li>
                                    <li>
                                        <a href="Maintenance-TrainingPackage.php">Training Packages</a>
                                    </li>
                                    <li>
                                        <a href="Maintenance-PenaltiesAndOtherFees.php">Penalties and Other Fees</a>
                                    </li>
                                    <li>
                                        <a href="Maintenance-Users.php">Users</a>
                                    </li>
                                    <li>
                                        <a href="Maintenance-BackupAndRestore.php">Backup and Restore</a>
                                    </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">Phantom Dice</a>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->



        <!-- #END# Right Sidebar -->
        <?php include("includes/footer.php"); ?>
    </section>
