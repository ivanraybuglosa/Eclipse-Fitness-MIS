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
                <h2>Studio Class Sessions</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Studio Class - Reports - Studio Class Sessions
                                </li>
                            </ol>
            </div>
        </div>
    <div class="card">
        <div class="header">
            <h2>Studio Class Sessions</h2>
        </div>
                        <div class="body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <div class="row clearfix">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="Spinning">
                                        </div>
                                    </div>  
                                </div>
                                    
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="08/12/17">
                                        </div>
                                    </div>  
                                </div>
                                    
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" class="form-control" value="09/25/17">
                                        </div>
                                    </div>  
                                </div>
                                
                                  
                                    <thead>
                                        <tr>
                                            <th align="center">Date</th>
                                            <th align="center">Sessions</th>
                                            <th align="center">Partipants</th>
                                            <th align="center">Coach</th>
                                            <th align="center">Start Time</th>
                                            <th align="center">End Time</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>

                                            <td align="center">09-5-2017</td>
                                            <td align="center">Aqua Zumba</td>
                                            <td align="center">23</td>
                                            <td align="center">Mark Benjamin</td>
                                            <td align="center">8:00 AM</td>
                                            <td align="center">9:00 AM</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">09-6-2017</td>
                                            <td align="center">Spinning</td>
                                            <td align="center">21</td>
                                            <td align="center">Ivan del Prado</td>
                                            <td align="center">10:00 AM</td>
                                            <td align="center">11:00 AM</td>
                                            
                                        </tr>
                                        <tr>

                                            <td align="center">09-12-2017</td>
                                            <td align="center">Yoga</td>
                                            <td align="center">25</td>
                                            <td align="center">John Cena</td>
                                            <td align="center">1:00 PM</td>
                                            <td align="center">2:00 PM</td>
                                            
                                        </tr>
                                        <tr>

                                            <td align="center">09-22-2017</td>
                                            <td align="center">Zumba</td>
                                            <td align="center">30</td>
                                            <td align="center">Michael Jackson</td>
                                            <td align="center">3:00 PM</td>
                                            <td align="center">4:00 PM</td>
                                            
                                        </tr>
                                        <tr>

                                            <td align="center">10-1-2017</td>
                                            <td align="center">Boxing</td>
                                            <td align="center">39</td>
                                            <td align="center">Erul Ubas</td>
                                            <td align="center">3:00 PM</td>
                                            <td align="center">4:00 PM</td>
                                            
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
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
</body>

</html>