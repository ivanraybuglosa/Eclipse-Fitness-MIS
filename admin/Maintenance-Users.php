<?php
 include "../dbConnect.php";
 session_start();
if (!isset($_SESSION['loggedIn'])) {
        
        echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
    }
 include("includes/header.php"); ?>
    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Users</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    Maintenance - Users
                                </li>
                            </ol>
            </div>
        </div>
       
            <div class="card">
                <div class="header">
                    <h2>User Access Form</h2>
                </div>
                <div class="body">
                    <div class="row js-sweetalert">
                            <form method="POST" action="actions/userAction.php">
                                        <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <h5 class="pull-left">Username </h5>
                                                <input type="text" name="username" class="form-control" required="true" >
                                             
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <h5 class="pull-left">Password </h5>
                                                <input type="password" name="password" class="form-control" required="true">
                                            
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-4">
                                        <div class="form-group">
                                    <div class="form-line">
                                        <h5 class="pull-left">User Type </h5>

                                        <select class="form-control show-tick" name="usertype" required="true">
                                            <option value="admin">Administrator</option>
                                            <option value="receptionist">Receptionist</option>
                                           
                                        </select>

                                    </div>
                                </div>
                                    </div>

                                    <div class="col-sm-12">
                                    <input type="hidden" name="action_type" value="add"/>
                                    <button type="submit" class="btn waves-effect btn-success pull-right" data-type='success'>SUBMIT</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        
                              
            
                
            
                 
            

                
                    <div class="card">
                        <div class="header">
                            <h2>User Access List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 230px;">User Type</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Username</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Password</th>

                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 230px;">Actions</th>
                                                
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $pdo = new dbConnect();
                                                        $users = $pdo->getRows('users', array('order_by' => 'userID ASC'));
                                                        if(!empty($users)){
                                                            $count = 0; 
                                                                foreach($users as $user){
                                                                    $count++;?>
                                                        
                                         <tr role="row">
                                            
                                            <td ><?php echo $user['userType']; ?></td>
                                            <td ><?php echo $user['username']; ?></td>
                                            <td ><?php echo $user['password'];?></td>
                                            <td ><button type="button" data-toggle="modal"  data-target="#edit-<?php echo $user['userID']; ?>" class="btn bg-green" >Modify</button></td>
                                               <div class="modal fade" id="edit-<?php echo $user['userID']; ?>" tabindex="-1" role="dialog">

                                                <div class="modal-dialog modal-sm" role="document">
                                                   <form method="post" action="actions/userAction.php" >
                                                     <input type="hidden" name="userID" value="<?php echo $user['userID']?>">
                                                    <div class="modal-content">
                                                    <center>
                                                        <div class="modal-header">
                                                            <h3 class="modal-title" id="smallModalLabel">EDIT USER ACCESS INFORMATION</h3>
                                                        </div>
                                                        
                                                            <div class="row container-fluid">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            
                                                                            <h5 class="pull-left">Username</h5>
                                                                            <input type="text" class="form-control" name="editUsername" value="<?php echo $user['username']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <h5 class="pull-left">Password</h5>
                                                                             <input type="password" class="form-control" name="editPassword" value="<?php echo $user['password']; ?>">
                                                                        </div>
                                                                    </div>
                                    
                                                                     
                                                                </div>
                                                            </div>
                                                        </center>
                                                        <div class="modal-footer">
                                                           
                                                            <input type="hidden" name="action_type" value="edit"/>
                                                            <button type="submit" class="btn  bg-green">SAVE CHANGES</button>
                                                            <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                    </div>
                                                </div>
                                            </div>  
                                        </tr>
                                        <?php } 

                                        }else { ?>
                                            <tr><td colspan="6">No User(s) found...</td></tr>
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
            <!-- Card 1 -->
            


                                
                            
                 


        
       
  
    
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
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="../assets/js/pages/dialogsMembershipOptions.js"></script>
    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>


    <script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
