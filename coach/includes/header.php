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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet">
        <!-- JQuery DataTable Css -->
    <link href="../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
   
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />


    <style type="text/css">
        .reveal-if-active {
                  opacity: 0;
                  max-height: 0;
                  overflow: hidden;
                  font-size: 16px;
                  -webkit-transform: scale(0.8);
                          transform: scale(0.8);
                  -webkit-transition: 0.5s;
                  transition: 0.5s;
                }
                .reveal-if-active label {
                  display: block;
                  margin: 0 0 3px 0;
                }
                .reveal-if-active input[type=text] {
                  width: 100%;
                }
                input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
                  opacity: 1;
                  max-height: 100px;
                  padding: 10px 20px;
                  -webkit-transform: scale(1);
                          transform: scale(1);
                  overflow: visible;
                }
    </style>
</head>

<body class="theme-black">
    <!-- Page Loader -->
  <div class="page-loader-wrapper">
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
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                 
                <a class="navbar-brand col-light-green" href="index.php">ECLIPSE GYM FITNESS MANAGEMENT INFORMATION SYSTEM
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COACH NAME</div>
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
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active hidden" >
                        <a href="index.php">
                            <i class="material-icons">apps</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li >
                        <a href="index.php">
                            <i class="material-icons">apps</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active hidden"  >
                        <a href="registration.php">
                            <i class="material-icons">person_add</i>
                            <span>Registration</span>
                        </a>
                    </li>
                    <li class="active hidden" >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Profiles</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="regular.php">Regular</a>
                            </li>
                            <li>
                                <a href="members.php">Members</a>
                            </li>
                            <li>
                                <a href="coaches.php">Coaches</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="studioClass.php">
                            <i class="material-icons">assessment</i>
                            <span>Studio Class</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_up</i>
                            <span>Personal Training</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="newContracts.php">New Contract</a>
                            </li>
                            <li>
                                <a href="myTrainee.php">My Trainee</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active hidden" >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Reports</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="clientReport.php">Client Activity Reports</a>
                            </li>
                            <li>
                                <a href="coachReport.php">Coach Activity Reports</a>
                            </li>
                            <li>
                                <a href="amenityReport.php">Amenity Reports</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="coachSchedule.php">
                            <i class="material-icons">watch_later</i>
                            <span>My Training Schedule</span>
                        </a>
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
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            
            
                    
        </aside>                       
                         
  
        <!-- #END# Right Sidebar -->
    </section>
