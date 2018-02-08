<?php
 include "../dbConnect.php";
 session_start();
 
 
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
                                            <button data-toggle="modal" data-target="#payment-<?php echo $tr['TR_ID']; ?>"  class="btn bg-red" >CHECKOUT</button>
                                            
                                            <div class="modal fade" id="payment-<?php echo $tr['TR_ID']; ?>" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                
                                                <form method="post" action="actions/transactionAction.php">
                                                <div class="modal-header">
                                                    <h3 class="modal-title"><center><?php $firstname = $tr['CLIENT_FirstName']; $lastname = $tr['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?>'s <?php echo $tr['TR_Type']?> Transaction</center></h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>Payment Form</h2>
                                                        </div>
                                            <div class="body">
                                                <div class="row clearfix">
                                                    <div class="col-lg-4">
                                                        <div class="form-group" >
                                                            <label>Amount</label>
                                                            <div class="form-line">
                                                                <input type="number" min="0" 
                                                                max="<?php 
                                                                    $payment = $pdo->payment($tr['TR_ID']);
                                                                    $bill = $pdo->bill($tr['TR_ID']);
                                                                    echo $bill-$payment;
                                                                ?>" name="paymentAmount" class="form-control" placeholder="Amount"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Date</label>
                                                            <div class="form-line">
                                                                <input type="date" name="paymentDate" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Time</label>
                                                            <div class="form-line">
                                                                <input type="time" min="8:00" max="20:00" name="paymentTime" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="hidden" name="TR_ID" value="<?php echo $tr['TR_ID']?>"/>
                                                        <input type="hidden" name="action_type" value="add"/>
                                                        <button type="submit" name ="submit" class="btn pull-right bg-green" data-type='success'>SUBMIT</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                        <div class="card">     
                                <div class="header">
                                    <h2>Payment History</h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th><center>Amount</center></th>
                                            <th><center>Date</center></th>
                                            <th><center>Time</center></th>
                                             
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                            <?php
                                                $pdo = new dbConnect();
                                                $pays = $pdo->payHistory($tr['TR_ID'],array("order_by" => "Pay_ID DESC"));
                                                    if(!empty($pays)){
                                                        $count = 0;
                                                        foreach($pays as $pay){
                                            ?>                         
                                        <tr>
                                            <td><?php echo $pay['Pay_amount'] ?></td>
                                            <td><?php echo date("F j, Y", strtotime($pay['Pay_date'])) ?></td>
                                            <td><?php echo date("g:i A", strtotime($pay['Pay_time'])) ?></td>
                                            
                                        
                                        </tr>
                                        <?php }} ?>
                                        </tbody>
                                    </table>
                                </div>
                                </div>



                                    </div>
                                </div>
                            </div>
                                    <div class="modal-footer">

                                <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                                        </td>
                                  <!--   </form> -->
                               
                                            

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



</section>

<?php include("includes/footer.php"); ?>

<!-- Custom Js -->
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
				
				
				
				
                                       
                                 