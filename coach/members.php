<?php include("includes/header.php"); ?>

  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Member Client Profile</h2>
            </div>
            <div >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Client Code</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Last Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">First Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;"></th>
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        
                                        
                                         <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td class="sorting_1">Legislador</td>
                                            <td>Patrick</td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >View</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            <td>C002</td>
                                            <td class="sorting_1">Buglosa</td>
                                            <td>Ivan Ray</td>
                                             <td class="align-center" ><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">View</button></td>
                                            
                                        </tr><tr role="row" class="odd">
                                            <td>C003</td>
                                            <td class="sorting_1">Yanson</td>
                                            <td>Vicmar</td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view" class="btn bg-green" style="height: 30px;">View</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            <td>C004</td>
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
                        
<ul class="nav nav-tabs nav-justified" id="tabContent">
    <li class="active">
        <a href="#info" data-toggle="tab">Client Information</a>
    </li>
    <li
        ><a href="#member" data-toggle="tab">Member Information</a>
    </li>
    <li>
        <a href="#personal" data-toggle="tab">Personal Training Information</a>
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
                                            <label>Client Code:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="C001">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Legislador">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Patrick">
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
                                        <label>Gender:</label>
                                        <input type="radio" name="gender" id="male" class="with-gap">
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" id="female" class="with-gap">
                                        <label for="female" class="m-l-20">Female</label>
                                        
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
                                        
                                        </div>
                                    
                                   
                                        
                                </div>
                                
                            </form>
                        </div>
       
    </div>

    <div class="tab-pane" id="member">
        <div class="body">
                            <form id="form_validation" method="POST" novalidate="novalidate">
                                
                                
                                <div class="form-group form-float">
                                    
                                    <div >
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Membership Registration Date:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="5-5-17">
                                        </div>
                                    </div>
                                    </div>
                                     
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Membership Package:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Bronze Package">
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Membership Duration:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="3 months">
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
                                            <label>Membership Beg:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="5-5-17">
                                        </div>
                                    </div>
                                    </div>
                                        <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Membership End:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="8-5-17">
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
                                            <label>Membership Status:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="On-Going">
                                        </div>
                                    </div>
                                    </div>
                                        
                                         <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Membership Type:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Student">
                                        </div>
                                    </div>
                                    </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
    </div> 
    <div class="tab-pane" id="personal">
        <div class="body">
                            <form id="form_validation" method="POST" novalidate="novalidate">
                                <div class="form-group form-float">
                                    
                                    <div >
                                         <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Coach First Name:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Mark">
                                        </div>
                                    </div>
                                </div>
                                         <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Coach Last Name:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Benjamin">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Coach Type:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Senior Coach">
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                                      <div class="form-group form-float">
                                    <div >
                                    <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Client First Name:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Patrick">
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Client Last Name:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Legislador">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Health Condition:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="NONE">
                                        </div>
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
                                            <label>Training Package Registered:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="8 Sessions">
                                        </div>
                                    </div>
                                </div>
                                        <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Training Session Validity:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="56 Days">
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
                                            <label>Training Session Done:</label>
                                                </span>
                                                <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="3 Sessions">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                            <label>Training Session Left:</label>
                                                </span>
                                                <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="6 Sessions">
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
                                            <label>Registration Date:</label>
                                                </span>
                                                <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="6-10-17">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                            <label>Personal Training Status:</label>
                                                </span>
                                                <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="On Going">
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                 </div>
                                
                            </form>
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

    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>

