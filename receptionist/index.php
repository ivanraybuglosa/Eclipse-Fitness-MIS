
<?php
 include "../dbConnect.php";
 session_start();
 if(!isset($_SESSION['username'])){
    header('location: ../login.php');
 }
 include("includes/header.php"); ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="header">
                            <h2>
                                 DASHBOARD
                            </h2>

                        <div class="col-auto pull-left">
                           <div class="row container-fluid">
                                <div class="col-sm-12" style="margin-top: 50px;">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Client Code" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Locker Number" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" min="0" placeholder="Towel Count" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="button" class="btn bg-cyan waves-effect" 
                                     >
                                    <i class="material-icons" >access_alarm</i>
                                    <span>TIME-IN</span>
                                </button>

                                <button type="button" class="btn bg-red waves-effect" 
                                     >
                                    <i class="material-icons" >access_alarm</i>
                                    <span>TIME-OUT</span>
                                </button>

                         </div>
                             
                        </div>


                        <div class="body table-responsive">
                            <table class="table table-hover">
                               <thead>
                                        <tr>
                                            <th class="center">Client Code</th>
                                            <th class="center">Client Name</th>
                                            <th class="center">Time-in</th>
                                            <th class="center">Time-out</th>
                                            <th class="center">Towels</th>
                                            <th class="center">Locker No.</th>
                                            <th class="center">Clearance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center">ACD14827</td>
                                            <td class="center">Legislador, Patrick</td>
                                            <td class="center">9:11 AM</td>
                                            <td class="center">4:05 PM</td>
                                            <td class="center">2</td>
                                            <td class="center">42</td>
                                            <td class="center"><button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal">Edit</button></td>
  
                                        </tr>
                                        <tr>
                                            <td class="center">XLP01981</td>
                                            <td class="center">Nessia, Brix</td>
                                            <td class="center">8:05 AM</td>
                                            <td class="center">10:10 AM</td>
                                            <td class="center">2</td>
                                            <td class="center">81</td>
                                            <td class="center"><button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Edit </button></td>
                                        </tr>
                                        <tr>
                                            <td class="center">GTD12671</td>
                                            <td class="center">Buglosa, Ivan</td>
                                            <td class="center">12:34 PM</td>
                                            <td class="center">3:45 PM</td>
                                            <td class="center">3</td>
                                            <td class="center">190</td>
                                            <td class="center"><button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Edit </button></td>

                                        </tr>
                                        <tr>
                                            <td class="center">OZA01011</td>
                                            <td class="center">Yanson, Vicmar</td>
                                            <td class="center">1:15 PM</td>
                                            <td class="center">2:10 PM</td>
                                            <td class="center">1</td>
                                            <td class="center">79</td>
                                            <td class="center"> <button type="button" class="btn bg-green" style="height: 30px;" data-toggle="modal"  data-target="#smallModal"> Edit </button></td>
                                        </tr>

                                    </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        <!-- Small Size -->
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                    <center>
                        <div class="modal-header">
                            <h3 class="modal-title" id="smallModalLabel">Update</h3>
                        </div>
                        
                            <div class="row container-fluid">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Towel Count</h5>
                                            <input type="number" class="form-control" placeholder="Towel Count" value="2"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h5 class="pull-left">Locker Number</h5>
                                            <input type="number" class="form-control" placeholder="Locker Number" value="42"/>
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
 <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <!--index -->
    <script src="../assets/js/pages/index.js"></script>
    <!--form-wizard-->
    <script src="../assets/js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
     <script src="../assets/js/pages/forms/basic-form-elements.js"></script>

     
   
</body>

</html>