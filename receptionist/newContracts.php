    <?php include("includes/header.php"); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><strong>List of Clients</strong></h2>
            </div>
            <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane animated fadeInRight active" id="home_animation_2">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Type</th>
                                           
                                            
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Tiger</td>
                                            <td>Nixon</td>
                                            <td>Member</td>
                                            
                                            
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett</td>
                                            <td>Winters</td>
                                            <td>Regular</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton</td>
                                            <td>Cox</td>
                                            <td>Regular</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric</td>
                                            <td>Kelly</td>
                                            <td>Member</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Airi</td>
                                            <td>Satou</td>
                                            <td>Regular</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Brielle</td>
                                            <td>Williamson</td>
                                            <td>Regular</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Herrod</td>
                                            <td>Chandler</td>
                                            <td>Member</td>
                                             
                                           
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                         <tr>
                                            <td>Tiger</td>
                                            <td>Nixon</td>
                                            <td>Member</td>
                                            
                                            
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett</td>
                                            <td>Winters</td>
                                            <td>Regular</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton</td>
                                            <td>Cox</td>
                                            <td>Regular</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric</td>
                                            <td>Kelly</td>
                                            <td>Member</td>
                                            
                                           
                                             <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Enroll</button></td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
           
        
        <!--- modals -->
        <div class="modal fade" id="view" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                   <center>
                             <div class="modal-header">
                            <div class="block-header">
                <h2 class="client_color"><strong>Client Information</strong></h2>
            </div>
                                 
 

<div class="tab-content">
    <ul class="nav nav-tabs  nav-justified" id="tabContent">
     <li class="active">
       
            <a href="#info" data-toggle="tab">Personal Information</a>
     </li>
     <li>
         <a href="#healthcondition" data-toggle="tab">Health Condition</a>
     </li>
       
    
    
</ul>
    <div class="tab-pane active" id="info">
            <div class="body">
                           
                               
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
                    <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>PT Package Code:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="PTC2213">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                    </div>
                    <hr/>
                <h5><i>Package</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Package Type:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Coach Type:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Package Validity:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                                <hr/>
                    <h5><i>Body Mass Index</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Weight:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Skeletal Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Fat Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Total Body Water:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Fat Free Mass:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Mass Index:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Percent Body Fat:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Waist-Hip Ratio:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Basal-Metabolic Rate:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                                <hr/>
                    <h5><i>Body Measurements</i></h5>
                     <div class="form-group form float">
                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Body Fat Percent:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Left Upper Arm:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Right Upper Arm:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Chest:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Waist:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Hip:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Left Upper Thigh:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Right Upper Thigh:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div >
                                   <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                           <label>Resting Heart Rate:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                  </div>
                                </div>

                    </div>
                
        </div>
        
       
    </div>
                
    <div class="tab-pane active" id="healthcondition">
        
    </div>
                     </div>
                       </div>
                       
                    </center>
                        <div class="modal-footer">
                            <button type="button" class="btn  bg-green">Enroll Client</button>
                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <?php include("includes/footer.php"); ?>

    <!-- Jquery DataTable Plugin Js -->
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

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
