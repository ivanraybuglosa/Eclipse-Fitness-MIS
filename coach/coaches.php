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
                <h2>Coaches Profile</h2>
            </div>
             <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#addCoach">ADD COACH</button>
                <div class="modal fade" id="addCoach" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Add Coach</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Last Name</h5>
                                            <input type="text" class="form-control" placeholder="Last Name" value= "Last Name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">First Name</h5>
                                            <input type="text" class="form-control" placeholder="First Name" value="First Name"/>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Contact Number</h5>
                                            <input type="text" class="form-control" placeholder="Contact Number" value="Contact number"/>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Email Address</h5>
                                            <input type="text" class="form-control" placeholder="Email Address" value="Email Address"/>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                     <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Specialty</h5>
                                            <input type="text" class="form-control" placeholder="Specialty" value="Specialty"/>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Coach Type</h5>
                                            <input type="text" class="form-control" placeholder="Coach Type" value="Coach Type"/>
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
            </div>
            <div>



                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">Last Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">First Name</th>
                                            
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;"></th>
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        
                                         <tr role="row" class="odd">
                                            
                                            <td class="sorting_1">Legislador</td>
                                            <td>Patrick</td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >View</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td class="sorting_1">Buglosa</td>
                                            <td>Ivan Ray</td>
                                            
                                             <td class="align-center" ><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">View</button></td>
                                            
                                        </tr><tr role="row" class="odd">
                                    
                                            <td class="sorting_1">Yanson</td>
                                            <td>Vicmar</td>
                                            
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view" class="btn bg-green" style="height: 30px;">View</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td class="sorting_1">Nessia</td>
                                            <td>Brix Rodamn</td>
                                        
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
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                              
                        
                        
                    <center>
                             <div class="modal-header">
                            <div class="block-header">
                <h2>Client Information</h2>
            </div>
             <ul class="nav nav-tabs  nav-justified" id="tabContent">
     <li class="active">
         <a href="#info" data-toggle="tab">Coach Information</a>
     </li>
        <li class>
            <a href="#activity" data-toggle="tab">Activity Log</a>
     </li>
    
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="info">
            <div class="body">
                            <form id="form_validation" method="POST" novalidate="novalidate">
                                <div class="form-group form-float">
                                    
                                    <div >
                                         <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Last Name</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="C001">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Legislador">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Patrick">
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                                    
                                </div>
                                
                                <div class="form-group form-float">
                                    
                                    <div >
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Age:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="19">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Email Address:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="patrick@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                
                              </div>
                            </div>
                                
                                <div class="form-group form float">
                                    <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Contact Number:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="09993808653">
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Registration Date:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="8-10-17">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Registration Status:</label>
                                        </span>
                                        <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="Member">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="input-group">
                                    
                                        <label>Gender:</label>
                                        
                                            <input type="radio" name="gender" id="male" class="with-gap">
                                            <label for="male">Male</label>
                                            <input type="radio" name="gender" id="female" class="with-gap">
                                            <label for="female" class="m-l-20">Female</label>
                                    
                                    </div>
                                </div>
                                        
                                        </div>
                                    
                                   
                                        
                                </div>
                                
                            </form>
                        </div>
        
       
    </div>

    <div class="tab-pane" id="activity">
       <div class="body">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Activity</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Date</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Coach</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Registration Type</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Registration Date</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Start Time</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">End Time</th>
                                            
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        
                                         <tr role="row" class="odd">
                                            <td>PTS001</td>
                                            <td>04/25/2017</td>
                                            <td class="sorting_1">Mark Benjamin</td>
                                            <td>Regular</td>
                                            <td>04/22/2017</td>
                                            <td>08:00</td>
                                            <td>9:00</td>

                                              
                                           
                                        </tr><tr role="row" class="even">
                                            <td>SCS025</td>
                                            <td>07/12/2017</td>
                                            <td class="sorting_1">Ivan del Prado</td>
                                            <td>Member</td>
                                            <td>07/04/2017</td>
                                            <td>10:00</td>
                                            <td>11:00</td>
                                             
                                            
                                        </tr><tr role="row" class="odd">
                                            <td>PTS002</td>
                                            <td>04/30/2017</td>
                                            <td class="sorting_1">Mark Benjamin</td>
                                            <td>Regular</td>
                                            <td>04/22/2017</td>
                                            <td>13:00</td>
                                            <td>14:00</td>
                                            
                                           
                                        </tr><tr role="row" class="even">
                                            <td>PTS003</td>
                                            <td>05/05/2017</td>
                                            <td class="sorting_1">Mark Benjamin</td>
                                            <td>Member</td>
                                            <td>04/22/2017</td>
                                            <td>14:00</td>
                                            <td>15:00</td>
                                             
                                           
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
                       
                        
                            
                        </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">SAVE CHANGES</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
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

