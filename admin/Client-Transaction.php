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
            <div class="card">
                <div class="body">
                    <div class="body table-responsive">
									 <form id="form_validation" method="POST" novalidate="novalidate">
                                <div class="form-group form-float">
                                    
                                    <div >
                                         <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <label>Client Code:</label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="C001">
                                        </div>
                                    </div>
										</div>
                                        <div class="col-md-3">
                                         <button type="button" class="btn waves-effect bg-green pull-left" style="padding:7.5px;"> &nbsp; View &nbsp;</button>
                                        </div>
                                	</div>
                                    
                                </div>
								
                                
                            </form>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Transaction Type</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Timothy Mooney</th>
                                        <td>Personal Training</td>
                                        <td>10-7-2017</td>
                                        <td>600</td>
                                    </tr>
                                    <tr>
                                         <th>Timothy Mooney</th>
                                        <td>Walk-In</td>
                                        <td>10-7-2017</td>
                                        <td>500</td>
                                    </tr>
                                    <tr>
                                         <th>Timothy Mooney</th>
                                        <td>Studio Class</td>
                                        <td>10-7-2017</td>
                                        <td>60</td>
                                    </tr>
									 <tr>
                                         <th>TOTAL</th>
                                        <td></td>
                                        <td></td>
                                        <td style="color:Green"><b>1,160.00</b></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        <button type="button" class="btn  bg-green pull-right" data-dismiss="modal"> &nbsp; Check-Out &nbsp;</button>
                        </div>
                </div>
            </div>
            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr role="row">
                                                
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Client Name</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Transaction Type</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Transaction Date</th>
											
											
											<th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Total Price</th>
                                            
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 40px;">Status</th>
                                            
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr role="row" class="even">
                                            
                                            <td>Ivan Buglosan</td>
                                            <td>Walk-In</td>
                                            <td>10-7-2017</td>
                                           
                                            <td>500.00</td>
                                             <td style = "color: Red">Un-Paid</td>
                                            
                                        </tr><tr role="row" class="odd">
                                            
                                            <td>Hans Patrick Legislador</td>
                                            <td>Membership</td>
                                            <td>10-7-2017</td>
                                           
                                            <td>1200.00</td>
                                            <td style = "color: Green">Paid</td>
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td>Hans Patrick Legislador</td>
                                            <td>Personal Training</td>
                                            <td>10-7-2017</td>
                                           
                                            <td>600.00</td>
										
                                             <td style = "color: Green">Paid</td>
                                        
										
										<tr role="row" class="even">
                                            
                                            <td>Timothy Mooney</td>
                                            <td>Walk-In</td>
                                            <td>10-7-2017</td>
                                           
                                            <td>500.00</td>
                                             <td style = "color: Red">Un-Paid</td>
                                            
                                        </tr><tr role="row" class="odd">
                                            
                                            <td>Timothy Mooney</td>
                                            <td>Studio Class</td>
                                            <td>10-5-2017</td>
                                           
                                            <td>60.00</td>
                                            <td style = "color: Red">Un-Paid</td>
                                           
                                        </tr><tr role="row" class="even">
                                            
                                            <td>Timothy Mooney</td>
                                            <td>Personal Training</td>
                                            <td>10-2-2017</td>
                                           
                                            <td>600.00</td>
											<td style = "color: Red">Un-Paid</td>
                                           
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
            

          
		
            </div>
    </section>
<?php include("includes/footer.php"); ?>

<script>
var FormStuff = {    init: function() {    this.applyConditionalRequired();    this.bindUIActions();  },    bindUIActions: function() {    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);  },    applyConditionalRequired: function() {        $(".require-if-active").each(function() {      var el = $(this);      if ($(el.data("require-pair")).is(":checked")) {        el.prop("required", true);      } else {        el.prop("required", false);      }    });      }  };FormStuff.init();
</script>


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

				
				
				
				
                                       
                                 