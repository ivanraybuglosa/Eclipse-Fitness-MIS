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
              <h2><strong>Towel Activity Reports<strong></h2>
            </div>
            <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane animated fadeInRight active" id="home_animation_2">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <div class="row clearfix">
                                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <button type="button" class="btn bg-teal btn-block btn-lg waves-effect">Filter</button>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                
                                  
                                    <thead>
                                        <tr>
                                            <th align="center">Date</th>
                                            <th align="center">Supplied</th>
                                            <th align="center">Available</th>
                                            <th align="center">Borrowed</th>
                                            <th align="center">Returned</th>
                                            <th align="center">Used</th>
                                            <th align="center">For Laundry</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td align="center">6-07-17</td>
                                            <td align="center">300</td>
                                            <td align="center">300</td>
                                            <td align="center">128</td>
                                            <td align="center">128</td>
                                            <td align="center">172</td>
                                            <td align="center">128</td>
                                            
                                        </tr>
                                        <tr>
                                           <td align="center">6-17-17</td>
                                            <td align="center">0</td>
                                            <td align="center">172</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">51</td>
                                            <td align="center">249</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">6-25-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">7-07-17</td>
                                            <td align="center">300</td>
                                            <td align="center">300</td>
                                            <td align="center">128</td>
                                            <td align="center">128</td>
                                            <td align="center">172</td>
                                            <td align="center">128</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">7-10-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">7-15-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">7-23-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                        </tr>
                                         <tr>
                                            <td align="center">7-30-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">8-06-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">8-13-17</td>
                                            <td align="center">300</td>
                                            <td align="center">300</td>
                                            <td align="center">128</td>
                                            <td align="center">128</td>
                                            <td align="center">172</td>
                                            <td align="center">128</td>
                                            
                                        </tr>
                                        <tr>
                                            <td align="center">8-21-17</td>
                                            <td align="center">0</td>
                                            <td align="center">200</td>
                                            <td align="center">121</td>
                                            <td align="center">121</td>
                                            <td align="center">69</td>
                                            <td align="center">124</td>
                                            
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