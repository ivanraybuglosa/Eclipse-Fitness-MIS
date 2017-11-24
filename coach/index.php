
<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Currently Present</div>
                            <div class="number count-to" data-from="0" data-to="158" data-speed="15" data-fresh-interval="20"></div>
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
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
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
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
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
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
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
                            <div class="font-bold m-b--35">UNIQUE REGULARS THIS MONTH</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>11</b> <small>WALK-INS</small></span>
                                </li>

                                <li>
                                    THIS WEEK
                                    <span class="pull-right"><b>29</b> <small>WALK-INS</small></span>
                                </li>

                                <li>
                                    TOTAL
                                    <span class="pull-right"><b>140</b> <small>WALK-INS</small></span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">UNIQUE MEMBERS THIS MONTH</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>4</b> <small>MEMBERS</small></span>
                                </li>

                                <li>
                                    THIS WEEK
                                    <span class="pull-right"><b>10</b> <small>MEMBERS</small></span>
                                </li>

                                <li>
                                    TOTAL
                                    <span class="pull-right"><b>52</b> <small>MEMBERS</small></span>
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
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Program</th>
                                            <th>Coach</th>
                                            <th>Schedule</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Training Session</td>
                                            <td>Mark Benjamin</td>
                                            <td>8:00 - 8:45 AM</td>
                                            <td><badge class="label bg-light-green">Completed</badge></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Training Session</td>
                                            <td>Avrybelle Lu</td>
                                            <td>9:30 - 10:15 AM</td>
                                            <td><badge class="label bg-light-green">Completed</badge></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Spinning Class</td>
                                            <td>Xirb Aissen</td>
                                            <td>12:00 - 1:00 PM</td>
                                            <td><badge class="label bg-blue">Ongoing</badge>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Yoga Class</td>
                                            <td>Rodrigo Duterte</td>
                                            <td>3:00 - 4:00 PM</td>
                                            <td><badge class="label bg-red">Incoming</badge></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Zumba Class</td>
                                            <td>Mark Benjamin</td>
                                            <td>6:00 - 7:00 PM</td>
                                            <td><badge class="label bg-red">Incoming</badge></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Aquazumba Class</td>
                                            <td>Manny Pacquiao</td>
                                            <td>7:30 - 8:30 PM</td>
                                            <td><badge class="label bg-red">Incoming</badge></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>

<?php include("includes/footer.php"); ?>
 <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <!--index -->
    <script src="../assets/js/pages/index.js"></script>
    <!--form-wizard-->
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>
    <script src="../assets/js/pages/charts/chartjs.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
     <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

     
   
</body>

</html>