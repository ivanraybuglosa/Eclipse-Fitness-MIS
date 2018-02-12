<?php
 include "../dbConnect.php";
 session_start();
if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
    } 

 include("includes/header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Walk-in Client List</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Clients - Reports - Walk-in Client List
                                </li>
                            </ol>
            </div>
        </div>
    </div>
    <?php include("Client-Report-List.php"); ?>
    <div class="card">
        <div class="header">
            <h2>Walk-in Client List</h2>
        </div>
        
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Contact Number</th>
                                            <th>Email Address</th>
                                            <th>Status</th>
                                            <th>Registration Date</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <!-- Exportable Table -->
                 
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>19</td>
                                            <td>Male</td>
                                            <td>09123456789</td>
                                            <td>timothy@gmail.com</td>
                                            <td>Member</td>
                                            <td>08/04/2017</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ivan Buglosa</td>
                                            <td>20</td>
                                            <td>Male</td>
                                            <td>09987654321</td>
                                            <td>ivan@gmail.com</td>
                                            <td>Regular</td>
                                            <td>07/05/2017</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Patrick Legislador</td>
                                            <td>21</td>
                                            <td>Male</td>
                                            <td>09777737291</td>
                                            <td>patrick@gmail.com</td>
                                            <td>Regular</td>
                                            <td>08/20/2017</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Brix Nessia</td>
                                            <td>25</td>
                                            <td>Male</td>
                                            <td>09628195721</td>
                                            <td>brix@gmail.com</td>
                                            <td>Member</td>
                                            <td>09/15/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Mary Francisco</td>
                                            <td>22</td>
                                            <td>Female</td>
                                            <td>09281759251</td>
                                            <td>mary@gmail.com</td>
                                            <td>Member</td>
                                            <td>09/20/2017</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Jordan</td>
                                            <td>26</td>
                                            <td>Male</td>
                                            <td>09391857281</td>
                                            <td>michael@gmail.com</td>
                                            <td>Regular</td>
                                            <td>07/15/2017</td>
                                            
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