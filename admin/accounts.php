<?php
 include "../dbConnect.php";
 session_start();

 include("includes/header.php"); ?>
    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Account</h2>
            </div>
                
                <div class="card">
                <div class="header">
                    <h2>Account Registration</h2>
                </div>
                <div class="body">
                <div class="row container-fluid">
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="lname" class="form-control" >
                                            <label class="form-label">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="fname" class="form-control" >
                                            <label class="form-label">Password</label>
                                        </div>
                                    </div>
                                </div>
                                
                                   <button type="button" class="btn  waves-effect btn-success pull-right" data-toggle="modal" style="padding:10px;">Save</button>

                            
            </div>
                    </div>
                </div>  
            

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="margin-top:20px">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Account Name</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Username</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">Password</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">Account Type</th>

                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;"></th>
                                                
                                                      </tr>
                                                </thead>
                                                <tbody>
                                         <tr role="row" class="odd">
                                            <td>Avrybelle Lu</td>
                                            <td class="sorting_1">recep01</td>
                                            <td>eclipsedesk1</td>
                                             <td>Receptionist</td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Manage</button></td>
                                           
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Mark Benjamin</td>
                                            <td class="sorting_1">coachmark</td>
                                            <td>151812</td>
                                            <td>Coach</td>
                                            <td class="align-center" ><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">Manage</button></td>
                                            
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>Justin Bieber</td>
                                            <td class="sorting_1">jb1112</td>
                                            <td>iamjustin</td>
                                             <td>Coach</td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view" class="btn bg-green" style="height: 30px;">Manage</button></td>
                                           
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Peter Kim</td>
                                            <td class="sorting_1">eclipse2017</td>
                                            <td>eclipseadmin</td>
                                             <td>Admin</td>
                                             <td class="align-center"><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">Manage</button></td>
                                           
                                      </tbody>
                                </table>
                                    </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               <div class="modal fade" id="view" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Account Information</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Account Name</h5>
                                            <input type="text" class="form-control" placeholder="Account Name" value="Avrybelle Lu"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Username</h5>
                                            <input type="text" class="form-control" placeholder="Username" value="recep01"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Password</h5>
                                            <input type="text" class="form-control" placeholder="Password" value="eclipsedesk1"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Account Type</h5>
                                            <select class="form-control show-tick">
                                               <option value="10">Receptionist</option>
                                               <option value="20">Admin</option>
                                               <option value="30">Coach</option>
                                            </select>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">UPDATE</button>
                            <button type="button" class="btn  bg-red">DELETE</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
            <!-- Card 1 -->
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
    <!-- Jquery Core Js -->
    <?php include("includes/footer.php"); ?>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>


    <script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
