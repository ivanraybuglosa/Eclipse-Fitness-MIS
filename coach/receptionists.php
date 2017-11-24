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
                <h2>Receptionists Profile</h2>
            </div>
             <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#addRep">ADD RECEPTIONIST</button>
                <div class="modal fade" id="addRep" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Add Receptionist</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Last Name</h5>
                                            <input type="text" class="form-control" placeholder="Last Name" value= "Last Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">First Name</h5>
                                            <input type="text" class="form-control" placeholder="First Name" value="First Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Contact Number</h5>
                                            <input type="text" class="form-control" placeholder="Contact Number" value="Contact number"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Email Address</h5>
                                            <input type="text" class="form-control" placeholder="Email Address" value="Email Address"/>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">SAVE</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div >



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Last Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">First Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;"> Contact Number</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Email Address</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;"></th>
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        
                                         <tr role="row" class="odd">
                                            
                                            <td class="sorting_1">Legislador</td>
                                            <td>Patrick</td>
                                            <td>09123456789</td>
                                            <td>patrick@gmail.com</td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >View</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td class="sorting_1">Buglosa</td>
                                            <td>Ivan Ray</td>
                                            <td>09122446789</td>
                                            <td>buglosa@gmail.com</td>
                                             <td class="align-center" ><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">View</button></td>
                                            
                                        </tr><tr role="row" class="odd">
                                    
                                            <td class="sorting_1">Yanson</td>
                                            <td>Vicmar</td>
                                            <td>09123344678</td>
                                            <td>vicky@gmail.com</td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view" class="btn bg-green" style="height: 30px;">View</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td class="sorting_1">Nessia</td>
                                            <td>Brix Rodamn</td>
                                            <td>09987654321</td>
                                            <td>brix@gmail.com</td>
                                             <td class="align-center"><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">View</button></td>
                                           
                                      </tbody>
                                </table>
                                    </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
            
        <!-- Small Size -->
            
             <div class="modal fade" id="view" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Receptionist Information</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Last Name</h5>
                                            <input type="text" class="form-control" placeholder="Last Name" value= "Last Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">First Name</h5>
                                            <input type="text" class="form-control" placeholder="First Name" value="First Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Contact Number</h5>
                                            <input type="text" class="form-control" placeholder="Contact Number" value="Contact number"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Email Address</h5>
                                            <input type="text" class="form-control" placeholder="Email Address" value="Email Address"/>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">SAVE CHANGES</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div >                            
            
           
            
         
            
        </div>
    </section>

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
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>

