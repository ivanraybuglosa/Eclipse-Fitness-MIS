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
                <h2>Amenity Reports</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Amenities - Reports
                                </li>
                            </ol>
            </div>
        </div>

         <div class="card">
            <div class="header">
                <h2>Amenity Reports</h2>
            </div>
            <div class="body">
            <div class="row">
                <div class="col-md-3">
                <a href="#" class="btn bg-blue btn-block waves-effect" role="button" name="btn-coachlist" data-type="success">INCOMPLETE</a>
                 </div>

                 <div class="col-md-3">
                <a href="#" class="btn bg-blue btn-block waves-effect" role="button" name="btn-coachactivity" data-type="success">INCOMPLETE</a>
                 </div>

                 <div class="col-md-3">
                <a href="#" class="btn bg-blue btn-block waves-effect" role="button" name="btn-clientprogress" data-type="success">INCOMPLETE</a>
                 </div>

                 <div class="col-md-3">
                <a href="#" class="btn bg-blue btn-block waves-effect" role="button" name="btn-clienttraininghistory" data-type="success">INCOMPLETE</a>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-3">
                <a href="#" class="btn bg-green btn-block waves-effect" role="button" name="btn-clientstatus" data-type="success">INCOMPLETE</a>
                 </div>

                 <div class="col-md-3">
                <a href="#" class="btn bg-green btn-block waves-effect" role="button" name="btn-clientattendance" data-type="success">INCOMPLETE</a>
                 </div>

                 <div class="col-md-3">
                <a href="#" class="btn bg-green btn-block waves-effect" role="button" name="btn-uniqueclients" data-type="success">INCOMPLETE</a>
                 </div>

                 <div class="col-md-3">
                <a href="#" class="btn bg-green btn-block waves-effect" role="button" name="btn-topclients" data-type="success">INCOMPLETE</a>
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