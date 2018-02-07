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
                <h2>Clients Transaction</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                           
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="material-icons">dashboard</i> Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    <i class="material-icons">credit_card</i> Clients - Transaction
                                </li>
                            </ol>
                </div>
        </div>
            <!-- <div class="card">
               
            </div> -->
            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Unpaid Transactions</h2>
                        </div>
                        <div class="body">
                            
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr role="row">
                                                
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Client Name</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Transaction Type</th>
                                            

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Transaction Date</th>
											
											
											<th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Bill</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;">Action</th>
                                            
                                            
                                          </tr>
                                    </thead>
                                    <!-- WALK-IN QUERY TRANSACTONS -->
                                    <tbody>
                                        <?php
                                            $pdo = new dbConnect();
                                            $trs = $pdo->transClient(array("order_by" => "TR_ID DESC"));
                                                if(!empty($trs)){ 
                                                $count = 0; 
                                                foreach($trs as $tr){ 
                                                $count++;

                                        ?>
                                     

                                      <tr>
                                        <td><?php $firstname = $tr['CLIENT_FirstName']; $lastname = $tr['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                        <td><?php echo $tr['TR_Type']; ?></td>
                                        <td><?php echo date("F j, Y", strtotime($tr['TR_TransactionDate'])) ?></td>
                                        <td><?php echo $tr['TR_Bill']; ?></td>

                                        <td>
                                            <form method="POST" action="actions/transactionAction.php">
                                            <input type="hidden" name="TR_ID" value="<?php echo $tr['TR_ID']?>">
                                            <input type="hidden" name="action_type" value="edit">
                                            <button name="submit" type="submit"  class="btn bg-red" >CHECKOUT</button>
                                        </td>
                                    </form>
                               
                                            

                                </tr>
                                <?php } }else{ ?>

                                                    <tr><td colspan="6">No transaction(s) found......</td></tr>

                                                    <?php } ?>
                                 
                                </tbody>

                                    
            <!-- #END# Hover Rows -->



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
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

				
				
				
				
                                       
                                 