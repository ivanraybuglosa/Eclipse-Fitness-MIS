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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Maintenance - Receptionists
                                </li>
                            </ol>
            </div>
      </div>
             <div class="card">
                <div class="header">
                    <h2>Receptionist</h2> 
                </div>
                 
                    <div class="body">
                        <div class="row clearfix js-sweetalert">
                            <form method="POST" action="actions/receptionistAction.php">
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="rlname" class="form-control" >
                                            <label class="form-label">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="rfname" class="form-control" >
                                            <label class="form-label">First Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="rmname" class="form-control" >
                                            <label class="form-label">Middle Name</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="rcontact" class="form-control" >
                                            <label class="form-label">Contact Number</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="remailAddress" class="form-control" >
                                            <label class="form-label">Email Address</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-12">
                                    <div class="input-group">
                                        <label>Gender:</label>
                                            <input type="radio" name="rgender" id="male" class="with-gap" checked="true" value="Male">
                                            <label for="male">Male</label>
                                            <input type="radio" name="rgender" id="female" class="with-gap" value="Female">
                                            <label for="female" class="m-l-20">Female</label>
                                  </div> 
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="rusername" class="form-control" >
                                            <label class="form-label">Account Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="Password" name="rpassword" class="form-control" >
                                            <label class="form-label">Account Password</label>
                                        </div>
                                    </div>
                                </div>
                                    <input type="hidden" name="action_type" value="add">
                                    <button type="submit" class="btn  waves-effect btn-success pull-right" data-type="success" style="padding-right: :20px; ">Save</button>
                                </form>    
                            </div>
                            
                        </div>
                    </div>

                    
                    
             <div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Last Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">First Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;"> Contact Number</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Email Address</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Gender</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Actions</th>
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $pdo = new dbConnect();
                                            $receptionist = $pdo->getRowsJoin('receptionist','users','userID','userID', array('order_by' => "Rec_id ASC"));
                                                if(!empty($receptionist)){
                                                    $count = 0;
                                                        foreach($receptionist as $receptionists){
                                                            $count++;
                                        ?>                                    
                                        <tr role="row" class="odd">
                                            <td class="hidden"><?php echo $receptionists['Rec_id']; ?></td>
                                            <td class="sorting_1"><?php echo $receptionists['Rec_lastName']; ?></td>
                                            <td><?php echo $receptionists['Rec_FirstName']; ?></td>
                                            <td><?php echo $receptionists['Rec_contact']?></td>
                                            <td><?php echo $receptionists['Rec_emailAdd']?></td>
                                            <td><?php echo $receptionists['Rec_gender']?></td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#edit-<?php echo $receptionists['Rec_id']; ?>" class="btn bg-green" >Edit</button></td>

                                            <div class="modal fade" id="edit-<?php echo $receptionists['Rec_id']; ?>" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                    <center>
                                                        <form method="post" action="actions/receptionistAction.php?" id="myform2" >
                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $receptionists['userID']; ?>"/>
                                                        <div class="modal-header">
                                                            <h3 class="modal-title" id="smallModalLabel">Receptionist Information</h3>
                                                        </div>
                                                        
                                                            <div class="row container-fluid">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">Last Name</h5>
                                                                            <input type="text" class="form-control"  name="rlname" value="<?php echo $receptionists['Rec_lastName']; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">First Name</h5>
                                                                            <input type="text" class="form-control" name="rfname" value="<?php echo $receptionists['Rec_FirstName']; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">Contact Number</h5>
                                                                            <input type="text" class="form-control" name="rcontact" value="<?php echo $receptionists['Rec_contact']; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">Email Address</h5>
                                                                            <input type="text" class="form-control" name="remailAddress" value="<?php echo $receptionists['Rec_emailAdd']; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">User Name</h5>
                                                                            <input type="text" class="form-control" name="rusername" value="<?php echo $receptionists['username']; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">Email Address</h5>
                                                                            <input type="password" class="form-control" name="rpassword" value="<?php echo $receptionists['password']; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                     
                                                                    <label>Gender:</label>
                                                                        <input type="radio" name="rgendermod" id="malemod" class="with-gap" <?php if($receptionists['Rec_gender']=="Male") echo "checked='true'";   ?> value="Male">
                                                                        <label for="malemod">Male</label>
                                                                        <input type="radio" name="rgendermod" id="femalemod" class="with-gap" <?php if($receptionists['Rec_gender']=="Female") echo "checked='true'";   ?> value="Female">
                                                                        <label for="femalemod" class="m-l-20">Female</label>
                                                              </div> 
                                                            </div>
                                                        </center>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="action_type" value="edit"/>
                                                            <button type="submit" class="btn  bg-green">SAVE CHANGES</button>
                                                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </tr>
                                        <?php }

                                        }else { ?>
                                            <tr>
                                                <td colspan="6">No Receptionist(s) found...</td>
                                            </tr>
                                        <?php }
                                        ?>

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
            
    </section>

 <?php include("includes/footer.php"); ?>
    <script src="../assets/js/pages/dialogsReceptionist.js"></script>
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

