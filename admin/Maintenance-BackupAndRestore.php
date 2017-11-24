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
                <h2>BACKUP AND RESTORE</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Maintenance - Backup and Restore
                                </li>
                            </ol>
            </div>
        </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="card" style="margin-top:20px">
                 <div class="body">
                    <h4>Export Data</h4>
                    <div class="row">
                        <div class="demo-checkbox" style="margin:30px;">
                            <div class="col-md-4">
                                <h5>Profiles</h5>
                                <input type="checkbox" id="md_checkbox_1"/>
                                <label for="md_checkbox_1">Client</label>
                                <input type="checkbox" id="md_checkbox_2"/>
                                <label for="md_checkbox_2">Coach</label>
                                <input type="checkbox" id="md_checkbox_3"/>
                                <label for="md_checkbox_3">Receptionist</label>
                                <input type="checkbox" id="md_checkbox_4" />
                            </div>
                            <div class="col-md-4">
                                <h5>Fitness Programs</h5>
                                <input type="checkbox" id="md_checkbox_7" />
                                <label for="md_checkbox_7">Personal Training</label>
                                <input type="checkbox" id="md_checkbox_8" />
                                <label for="md_checkbox_8">Studio Class</label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" id="md_checkbox_9" />
                                <label for="md_checkbox_9" style="margin-top:30px;">Select All</label>
                            </div>
                        </div>
                    </div>
             <button type="button" class="btn  btn-success " style="padding:0px; margin-left:13px;" data-toggle="modal" data-target="#addRep">
                            <form action="/" style="opacity: 0; width: 10%; margin-bottom:-20px;"  id="frmFileUpload" class="drapzawn" method="post" enctype="multipart/form-data">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        <h5>Export</h5>
            </button>

             <br>
             <br>
             <h4>Import Data</h4>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SELECT DATABASE FILE
                            </h2>
                        </div>
                        <div class="body">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <button type="button" class="btn  btn-success" style="padding:10px 112px; margin-left:13px;" data-toggle="modal" data-target="#addRep"><h5>Import</h5></button>
                 </div>
               </div>
            </div>
               
        </div>
    </section>
            <!-- Card 1 -->
            

    <!-- Jquery Core Js -->
    <?php include("includes/footer.php"); ?>

    <script>
var FormStuff = {    init: function() {    this.applyConditionalRequired();    this.bindUIActions();  },    bindUIActions: function() {    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);  },    applyConditionalRequired: function() {        $(".require-if-active").each(function() {      var el = $(this);      if ($(el.data("require-pair")).is(":checked")) {        el.prop("required", true);      } else {        el.prop("required", false);      }    });      }  };FormStuff.init();
</script>


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

    <script src="../../plugins/dropzone/dropzone.js"></script>
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>


    <script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
