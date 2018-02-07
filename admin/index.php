
<?php
include "../dbConnect.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location: ../login.php');
}
include("includes/header.php"); ?>


<section class="content">
    <div class="container-fluid">
            <div class="block-header">
                <h2>Dashboard</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="material-icons">dashboard</i> Dashboard
                    </li>
                </ol>
                </div>
        </div>
    

        <!-- Widgets -->
        <div class="info-box bg-black ">
                            <div id="clockdate" style="center">
                    <div class="clockdate-wrapper">
                        <div id="clock"></div>
                        <div id="date"></div>
                    </div>
                </div>
                    </div>
        
        <?php
        $year = date("Y");
        $today = date("Y-m-d");
        $conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error()); 

        $date = date('Y-m-d');

        $fetchclients = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` ") or die(mysqli_error());
        $clients = $fetchclients->fetch_array();

        $fetchcontracts = $conn->query("SELECT COUNT(TL_Code) as total FROM `traininglog` ") or die(mysqli-error());
        $contracts = $fetchcontracts->fetch_array();

        $fetchparticipants = $conn->query("SELECT COUNT(CA_Code) as total FROM `clientassignment` ") or die(mysql_error());
        $participants = $fetchparticipants->fetch_array();

        $fetchpresent = $conn->query("SELECT COUNT(A_Code) as total FROM `attendance` WHERE `A_TimeOut` = '' && `A_Date` = '$today' ") or die(mysql_error());
        $present = $fetchpresent->fetch_array();

        $fetchwalkin = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE `CLIENT_RegStatus` = 'Walk-in' && year = '$year' ") or die(mysql_error());
        $walkin = $fetchwalkin->fetch_array();

        $fetchmembers = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE `CLIENT_RegStatus` = 'Member' && year = '$year'") or die(mysql_error());
        $members = $fetchmembers->fetch_array();

        $allfetch = $conn->query("SELECT COUNT(CLIENT_ID) as total FROM `client` WHERE year = '$year' ") or die(mysql_error());
        $all = $allfetch->fetch_array();

        $fetchtransact = $conn->query("SELECT COUNT(TR_ID) as total FROM `transaction` WHERE year = '$year' ") or die(mysql_error());
        $transact = $fetchtransact->fetch_array();
        ?>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">playlist_add_check</i>
                    </div>
                    <div class="content">
                        <div class="text">Currently Present</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $present['total'] ?>" data-speed="15" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">Ongoing Contracts</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $contracts['total'] ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">forum</i>
                    </div>
                    <div class="content">
                        <div class="text">Class Participants</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $participants['total'] ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Clients</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $clients['total'] ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <!-- #END# CPU Usage -->
        <div class="row clearfix">

            <!-- Answered Tickets -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
                <div class="card">
                    <div class="body bg-teal">
                        <div class="font-bold m-b--35">THE COMPANY THIS YEAR</div>
                        <ul class="dashboard-stat-list">
                            <li>
                                NEW WALK-INS
                                <span class="pull-right"><b><?php echo $walkin['total'] ?></b></span>
                            </li>

                            <li>
                                NEW MEMBERSHIPS
                                <span class="pull-right"><b><?php echo $members['total'] ?></b> </span>
                            </li>

                            <li>
                                TOTAL TRANSACTIONS
                                <span class="pull-right"><b><?php echo $transact['total'] ?></b></span>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
            <!-- #END# Answered Tickets -->
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>TODAY'S ACTIVITIES</h2>
                    </div>
                     <div class="body">
                            
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr>
                                        <th>Coach</th>
                                        <th>Activity</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $pdo = new dbConnect;
                                        $date = date("Y-m-d");
                                        $acts = $pdo->dashboardActs($date,array("order_by" => "AL_Code ASC"));
                                                if(!empty($acts)){
                                                    $count = 0;
                                                    foreach($acts as $act){
                                    ?>
                                    
                                    <tr>
                                        <td><?php $firstname = $act['Coach_FirstName']; $lastname = $act['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                        <td><?php echo $act['Activity']?></td>
                                        <td><?php echo date("g:i A", strtotime($act['AL_StartTime'])) ?></td>
                                        <td><?php echo date("g:i A", strtotime($act['AL_EndTime'])) ?></td>
                                    </tr>
                                    <?php } }else{ ?>

                                                    <tr><td colspan="6">No Activities found......</td></tr>

                                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
    </div>
</section>
<script type="text/javascript">

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

        var time = h + ":" + m + ":" + s + " " + session+ "  -  "+ days[date.getDay()];
        document.getElementById("clock").innerHTML = time;




        setTimeout(showTime, 1000);
    }
    showTime();
    function showDate(){
        var date = new Date();
        var mon = date.getMonth();
        var day = date.getDate();
        var yr = date.getFullYear();
        var monthNames = ["January", "February", "March", "April", "May", "June",
                          "July", "August", "September", "October", "November", "December" ];
        var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        var finalDATE = monthNames[date.getMonth()] + " "+day+ ","+yr
        document.getElementById("date").innerHTML = finalDATE;
    }

    showDate();


</script>

<?php include("includes/footer.php"); ?>



    
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
</body>

</html>