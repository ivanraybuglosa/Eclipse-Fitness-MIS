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
                <h2>Coach List</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Personal Training - Reports - Coach List
                                </li>
                            </ol>
            </div>
        </div>
    <div class="card">
    <div class="header">
        <h2>Coach List</h2>
    </div>
                        <div class="body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                
                                    
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Email Address</th>
                                            <th>Type</th>
                                            <th>Specialty</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <!-- Exportable Table -->
                 
                                        </tr>
                                        <tr>
                                            <td>Timothy Mooney</td>
                                            <td>30</td>
                                            <td>Male</td>
                                            <td>timothy@gmail.com</td>
                                            <td>Senior</td>
                                            <td>Fitness</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Ivan Buglosa</td>
                                            <td>35</td>
                                            <td>Male</td>
                                            <td>ivan@gmail.com</td>
                                            <td>Junior</td>
                                            <td>Fitness</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Patrick Legislador</td>
                                            <td>32</td>
                                            <td>Male</td>
                                            <td>patrick@gmail.com</td>
                                            <td>Senior</td>
                                            <td>Boxing</td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>Brix Nessia</td>
                                            <td>29</td>
                                            <td>Male</td>
                                            <td>brix@gmail.com</td>
                                            <td>Junior</td>
                                            <td>Mad Dog</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Erul Ubas</td>
                                            <td>28</td>
                                            <td>Male</td>
                                            <td>erul@gmail.com</td>
                                            <td>Senior</td>
                                            <td>Yoga</td>
                                         
                                        </tr>
                                        <tr>
                                            <td>Mary Francisco</td>
                                            <td>31</td>
                                            <td>Female</td>
                                            <td>mary@gmail.com</td>
                                            <td>senior</td>
                                            <td>Spinning</td>
                        
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