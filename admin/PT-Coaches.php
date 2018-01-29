<?php
 include("../dbConnect.php");
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
include("includes/header.php"); 

 ?>
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Coaches</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    <i class="material-icons">person</i> Personal Training - Coaches
                                </li>
                            </ol>
            </div>
        </div>
            <div class="card">
                <div class="header">
                    <h2>Add Coach</h2>
                </div>
                <div class="body">
                <div class="row container-fluid">
                    <form action="actions/coachAction.php" method="post">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="LastName" class="form-control" >
                                            <label class="form-label">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="FirstName" class="form-control" >
                                            <label class="form-label">First Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="MiddleName" class="form-control" >
                                            <label class="form-label">Middle Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="EmailAddress" class="form-control" >
                                            <label class="form-label">Email Address</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="Specialty" class="form-control" >
                                            <label class="form-label">Specialty</label>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class="col-sm-4">
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="ContactNumber" class="form-control" >
                                            <label class="form-label">Contact Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="Type" class="form-control" >
                                            <label class="form-label">Type</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <select class="form-control" name="gender">
                                            <option value="">Gender</option>
                                            <option id=male value="Male">Male</option>
                                            <option id=female value="Female">Female</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="cusername" class="form-control" >
                                            <label class="form-label">Account Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="cpassword" class="form-control" >
                                            <label class="form-label">Account Password</label>
                                        </div>
                                    </div>
                                </div>
                                  
                                    <input type="hidden" name="action_type" value="add"/>
                                    <button name ="submit"  type="submit" class="btn bg-green pull-right">SAVE</button>
                            </form>
                        </div>
                   
                    </div>
                 
                </div>
    
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">First Name</th>
                                            
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Last Name</th>
                                            
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Coach Type</th>
                                            
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Contact Number</th>
                                            
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Gender</th>

                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Specialty</th>
                                            
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Email Address</th>
                                            
                                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Update</th>

                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                    <?php
                                                        $pdo = new dbConnect();
                                                        $coachs = $pdo->getRowsJoin('coach','users','userID','userID', array('order_by'=>'COACH_ID ASC'));
                                                        if(!empty($coachs)){ 
                                                            $count = 0; 
                                                                foreach($coachs as $coach){ 
                                                                    $count++;?>
                                                        <tr>
                                                        <td class="hidden"><?php echo $coach['COACH_ID']; ?></td>
                                                        <td><?php echo $coach['Coach_FirstName']; ?></td>
                                                        <td><?php echo $coach['Coach_LastName']; ?></td>
                                                        <td><?php echo $coach['Coach_Type']; ?></td>
                                                        <td><?php echo $coach['Coach_ContactNumber']; ?></td>
                                                        <td><?php echo $coach['Coach_Gender']; ?></td>
                                                        <td><?php echo $coach['Coach_Specialty']; ?></td>
                                                        <td><?php echo $coach['Coach_EmailAddress']; ?></td>
                                                        <td class="align-center">
                                                            <button type="button" class="btn bg-green" data-toggle="modal"  data-target="#edit-<?php echo $coach['COACH_ID']; ?>" style="height: 30px;">Modify</button>
                                                        </td>
    <div class="modal fade" id="edit-<?php echo $coach['COACH_ID']; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <center>
                    <form  method="POST" action="actions/coachAction.php" id="myform2">
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $coach['userID']; ?>"/>
                        <div class="modal-header">
                            <div class="block-header">
                                <h2>Update Coach Record</h2>
                            </div>
                        </div>
                        <div class="row container-fluid">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="LastName" class="form-control" value="<?php echo $coach['Coach_LastName']; ?>"/>
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="FirstName" class="form-control" value="<?php echo $coach['Coach_FirstName']; ?>">
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="ContactNumber" class="form-control" value="<?php echo $coach['Coach_ContactNumber']; ?>"/>
                                        <label class="form-label">Contact Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="EmailAddress" class="form-control" value="<?php echo $coach['Coach_EmailAddress']; ?>"/>
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="Type" class="form-control" value="<?php echo $coach['Coach_Type']; ?>"/>
                                        <label class="form-label">Type</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="Specialty" class="form-control" value="<?php echo $coach['Coach_Specialty']; ?>"/>
                                        <label class="form-label">Specialty</label>
                                    </div>
                                </div>
                            </div>
                            <label>Gender:</label>
                                <input type="radio" name="gendermod" id="cmalemod" class="with-gap" <?php if($coach['Coach_Gender']=="Male") echo "checked='true'";   ?> value="Male">
                                <label for="cmalemod">Male</label>
                                <input type="radio" name="gendermod" id="cfemalemod" class="with-gap" <?php if($coach['Coach_Gender']=="Female") echo "checked='true'";   ?> value="Female">
                                <label for="cfemalemod" class="m-l-20">Female</label>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="username" class="form-control" value="<?php echo $coach['username']; ?>"/>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control" value="<?php echo $coach['password']; ?>"/>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="modal-footer">
                        <input type="hidden" name="action_type" value="edit"/>
                        <button type="submit" class="btn bg-green pull-right">SAVE CHANGES</button>
                        <button type="button" class="btn  bg-red" data-dismiss="modal" style="margin-right:10px;">CLOSE</button>
                    </div>
                </form>
            </center>
        </div>
    </div>
</div>
        
        
                                                </tr>
                                                    <?php } 
                                                        } else { ?>
                                                    <tr>
                                                        <td colspan="4">No coaches found......</td>
                                                    </tr>        
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>  
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

