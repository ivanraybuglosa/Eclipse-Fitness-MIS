<?php
 include "../dbConnect.php";
 session_start();
if (isset($_SESSION['user'])) {

}else{
        echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
         }
 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Client Training History</h2>
            </div>
            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Client Training History
                                </li>
                            </ol>
            </div>
        </div>
        
    <?php include("includes/PT-Report-List.php"); ?>
    <div class="card">
        <div class="header">
        <h2>Client Training History</h2>
            </div>
                        <div class="body">
                         <div class="row">
                            <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Client Code" />
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-success waves-effect" style="padding-left:30px; padding-right: 30px;">View</button>
                                <label style="margin-left: 55px;">Details:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" disabled="true" value="Michael Jackson  "/>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" disabled="true" value="Member" />
                            </div>
                         </div>
                         
                            <div class="table-responsive">
                                
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <div class="row clearfix">
                                    <thead>
                                        <tr>
                                            <th align="center">Training Code</th>
                                            <th align="center">Coach</th>
                                            <th align="center">Sessions</th>
                                            <th align="center">Coach Type</th>
                                            <th align="center">Start Date:</th>
                                            <th align="center">End Date:</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td align="center">PTS012</td>
                                            <td align="center">Mark Benjamin</td>
                                            <td align="center">24</td>
                                            <td align="center">Senior</td>
                                            <td align="center">05-17-17</td>
                                            <td align="center">08-21-17</td>
                                        </tr>
                                        <tr>
                                           <td align="center">PTS017</td>
                                            <td align="center">Avrybelle Lu</td>
                                            <td align="center">8</td>
                                            <td align="center">Junior</td>
                                            <td align="center">08-25-17</td>
                                            <td align="center">09-16-17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">PTS020</td>
                                            <td align="center">Mark Benjamin</td>
                                            <td align="center">1</td>
                                            <td align="center">Senior</td>
                                            <td align="center">9-17-17</td>
                                            <td align="center">9-17-17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">PTS022</td>
                                            <td align="center">Mohammed Hassan</td>
                                            <td align="center">8</td>
                                            <td align="center">Junior</td>
                                            <td align="center">9-20-17</td>
                                            <td align="center">10-03-17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">PTS027</td>
                                            <td align="center">Rick Grimes</td>
                                            <td align="center">1</td>
                                            <td align="center">Senior</td>
                                            <td align="center">10-05-17</td>
                                            <td align="center">10-05-17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">PTS029</td>
                                            <td align="center">Larry Bird</td>
                                            <td align="center">2</td>
                                            <td align="center">Junior</td>
                                            <td align="center">10-09-17</td>
                                            <td align="center">10-11-17</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">PTS040</td>
                                            <td align="center">Xander Ford</td>
                                            <td align="center">12</td>
                                            <td align="center">Senior</td>
                                            <td align="center">10-25-17</td>
                                            <td align="center">12-05-17</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    <?php include("includes/footer.php"); ?>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
      <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>\

    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <script src="../assets/js/pages/charts/chartjsnew.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
</body>

</html>