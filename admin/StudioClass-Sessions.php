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
                <h2><strong>STUDIO CLASS</strong></h2>
            </div>
            
        <div class="card">
            <div class="header">
                <h2>Add Studio Class Session</h2>
            </div>

            <div class="body">
                <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <p>Studio Class:</p>
                                             <select class="form-control show-tick">
                                                     <option>Senior</option>
                                                     <option>Junior</option>
                                             </select>
                                         </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Coach:</p>
                                                <select class="form-control show-tick">
                                                     <option>Mark Benjamin</option>
                                                     <option>Ivan buglosa</option>
                                             </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Session Date:</p>
                                                <input type="date" name="sessionDate" class="form-control" >
                                                <label class="form-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Session Start Time:</p>
                                                <input type="time" name="sessionSTime" class="form-control" >
                                                <label class="form-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Session End Time:</p>
                                                <input type="time" name="sessionETime" class="form-control" >
                                                <label class="form-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                     <button type="button" class="btn  bg-green pull-right">&nbsp; SAVE &nbsp;</button>
                                </div>
                            </div>
            </div>
        </div>
            
             
            
            <!-- Card 1 -->
        <div class="card">
            <div class="header">
                <h2>Studio Class Session Calendar</h2>
            </div>

            <div class="body">
                <div class="row">
                    <div id="full-calendar">              
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div> 
</section>     
                
            
            


    <!-- Jquery Core Js -->
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

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <script type="text/javascript" src="../assets/js/pages/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="../assets/js/pages/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="../assets/js/pages/fullcalendar/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="../assets/js/pages/fullcalendar/fullcalendar-script.js"></script>


</body>

</html>
