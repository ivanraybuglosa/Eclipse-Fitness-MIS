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
                <h2>STUDIO CLASS</h2>
            </div>
                
                <button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#scClass">ADD STUDIO CLASS</button>
                <div class="modal fade" id="scClass" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Add Studio Class Session</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Studio Class Name</h5>
                                            <input type="text" class="form-control" placeholder="Studio Class Name" value="Studio Class Name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Capacity</h5>
                                            <input type="text" class="form-control" placeholder="Coach Name" value="Capacity"/>
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
            

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="margin-top:20px">

                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Studio Class Code</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Studio Class Name</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Capacity</th>
                                                        
                                                        <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;"></th>
                                                
                                                      </tr>
                                                </thead>
                                                <tbody>
                                         <tr role="row" class="odd">
                                            <td>SC01</td>
                                            <td class="sorting_1">Spinning</td>
                                            <td>39</td>
                                              <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view"class="btn bg-green" >Edit</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            <td>SC02</td>
                                            <td class="sorting_1">F360</td>
                                            <td>15</td>
                                             <td class="align-center" ><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">Edit</button></td>
                                            
                                        </tr><tr role="row" class="odd">
                                            <td>SC03</td>
                                            <td class="sorting_1">Zumba</td>
                                            <td>10</td>
                                            <td class="align-center"><button type="button" data-toggle="modal"  data-target="#view" class="btn bg-green" style="height: 30px;">Edit</button></td>
                                           
                                        </tr><tr role="row" class="even">
                                            <td>SC04</td>
                                            <td class="sorting_1">Aqua Zumba</td>
                                            <td>9</td>
                                             <td class="align-center"><button type="button" class="btn bg-green" data-toggle="modal"  data-target="#view" style="height: 30px;">Edit</button></td>
                                           
                                      </tbody>
                                </table>
                                    </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               <div class="modal fade" id="view" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">EDIT STUDIO CLASS</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Studio Class</h5>
                                            <input type="text" class="form-control" placeholder="Studio Class" value="Spinning"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Participants</h5>
                                            <input type="text" class="form-control" placeholder="Participants" value="39"/>
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
            <!-- Card 1 -->
            


                                
                            
                 


        
       
  

    <!-- Jquery Core Js -->
    <?php include("includes/footer.php"); ?>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>


    <script src="../assets/js/pages/forms/form-wizard.js"></script>

</body>

</html>
