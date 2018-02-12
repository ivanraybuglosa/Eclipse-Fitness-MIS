<?php
 include "../dbConnect.php";
 session_start();
 if (!isset($_SESSION['loggedIn'])) {
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
    }
 
 include("includes/header.php"); ?>
    <?php 
            $id = $_GET['id'];
            
            
            $pdo = new dbConnect();
            $scs = $pdo->getStudioClass($id,array('order_by'=>'SCS_Code ASC'));
            if(!empty($scs)){ 
            $count = 0; 
            foreach($scs as $sc){ 
            $count++;
           
        ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><strong>STUDIO CLASS</strong></h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 contentl-xs-12">


            <ol class="breadcrumb">
                <li>
                    <a href="index.php">
                        <i class="material-icons">dashboard</i> Dashboard
                    </a>
                </li>
                <li class="active">
                    <i class="material-icons">queue</i> Studio Class Sessions - <?php echo $sc['SC_Name']?> Class - Schedule
                </li>
            </ol>
        </div>
        </div>

        

        <div class="card">
            <div class="header">
                <h2>Modify Studio Class Session</h2>
            </div>
            <div class="body">
                <div class="row container-fluid">
                    <form method="POST" action="actions/SCSessionsAction.php">
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <p>Studio Class:</p>
                                             
                                             <select class="form-control show-tick" name="SCName">
                                                <?php 
                                            $pdo = new dbConnect();
                                            $sclasses = $pdo->getRows('studioclass', array('order_by' => "SC_Code ASC"));
                                                if(!empty($sclasses)){
                                                    $count = 0;
                                                        foreach($sclasses as $sclass){
                                                            $count++;
                                            ?>   
                                                <option value="<?php echo $sclass['SC_Code']; ?>"
                                                        <?php if ($sclass['SC_Code'] === $sc['SC_Code']) echo ' selected="selected"' ?>
                                                    ><?php echo $sclass['SC_Name'];?>
                                                    
                                                </option>
            
                                                     <?php } }?>
                                             </select>
                                             
                                         </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Coach:</p>
                                                <select class="form-control show-tick" name="Coach">
                                                    <?php 
                                            $pdo = new dbConnect();
                                            
                                            $coachs = $pdo->getRows('coach', array('order_by' => "COACH_ID ASC"));
                                            
                                                if(!empty($coachs)){
                                                    $count = 0;
                                                        foreach($coachs as $coach){
                                                            $count++;
                                            ?>  
                                                     <option value="<?php echo $coach['COACH_ID']; ?>"
                                                        <?php if ($coach['COACH_ID'] === $sc['COACH_ID']) echo ' selected="selected"' ?>
                                                        >
                                                        <?php $firstname = $coach['Coach_FirstName']; $lastname = $coach['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?>
                                                            
                                                        </option>
                                                     <?php } }?> 
                                             </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Session Date:</p>
                                                <input type="date" name="sessionDate" class="form-control" value="<?php echo $sc['SCS_Date']?>">
                                                <label class="form-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Session Start Time:</p>
                                                <input type="time" name="sessionSTime" min="07:00" max="22:00" class="form-control" value="<?php echo date("0g:i", strtotime($sc['SCS_StartTime'])) ?>">
                                                <label class="form-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <p>Session End Time:</p>
                                                <input type="time" name="sessionETime" min="07:00" max="22:00" class="form-control" value="<?php echo date("0g:i", strtotime($sc['SCS_EndTime'])) ?>">
                                                <label class="form-label"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="hidden" name="SCS_Code" value="<?php echo $sc['SCS_Code']?>">
                                        <input type="hidden" name="action_type" value="edit"/>
                                         <button type="submit" class="btn  waves-effect btn-success pull-right" data-type='success'>&nbsp; UPDATE &nbsp;</button>
                                    </div>
                                </div>
                            </div>

                        
        </div>
    </form>
</div>
<div class="card">
                            <div class="header">
                               
                                    
                                        <h2><?php echo $sc['SC_Name']?> Participants</h2>
                                    
                                        </div>
                           

                            <form method="post" action="actions/clientAssignmentAction.php">
                            <div class="body">

                                <div class="row container-fluid">
                                <div class="col-sm-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control show-tick" data-live-search="true" name="clientname">
                                                    <?php 
                                            $pdo = new dbConnect();
                                            
                                            $clients = $pdo->getRows('client', array('order_by' => "CLIENT_ID ASC"));
                                            
                                                if(!empty($clients)){
                                                    $count = 0;
                                                        foreach($clients as $client){
                                                            $count++;
                                            ?>  
                                                    <option value="<?php echo $client['CLIENT_ID']; ?>">
                                                        <?php $firstname = $client['CLIENT_FirstName']; $lastname = $client['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?>
                                                            
                                                    </option>
                                                     <?php } }?> 
                                             </select>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <input type="hidden" name="SCS_Code" value="<?php echo $sc['SCS_Code']?>">
                                            <input type="hidden" name="scname" value="<?php echo $sc['SC_Name']?>">
                                            <input type="hidden" name="sccapacity" value="<?php echo $sc['SC_Capacity']?>">
                                            <input type="hidden" name="coach" value="<?php echo $_GET['coach']?>">
                                            <input type="hidden" name="action_type" value="add"/>
                                            <button type="submit" name="submit" class="btn btn-block waves-effect btn-success " data-type='success'>&nbsp; REGISTER &nbsp;
                                                
                                            </button>
                                        </form>
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-block waves-effect btn-success" disabled >&nbsp; Remaining &nbsp;<span class="badge">
                                                        <?php
                                                            $pdo = new dbConnect(); 
                                                            $id = $_GET['id'];
                                                            $remaining = $pdo->remaining($id);
                                                            $cap = $pdo->cap($id);
                                                            if($remaining == ''){
                                                                echo $cap;
                                                            }else{
                                                                echo $remaining;
                                                            }
                                                            

                                                        ?>
                                                    </span>
                                                
                                            </button>
                                            
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-block waves-effect btn-success " disabled>&nbsp; Capacity &nbsp;<span class="badge">
                                                        <?php echo $sc['SC_Capacity']?>
                                                                    
                                                    </span>
                                                
                                            </button>
                                            
                                        </div>

                                        <div class="col-sm-12">
                                <form method="post" action="actions/clientAssignmentAction.php">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Participants</th>
                                                    <th>Registration Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <?php 
                                            $pdo = new dbConnect();
                                            $cas = $pdo->rowsInnerJoin($id,array('order_by' => "CA_Code ASC"));
                                                    if(!empty($cas)){ 
                                                    $count = 0;
                                                        foreach($cas as $ca){
                                                            $count++;
                                            ?>   
                                                
                                                <td><?php echo $ca['ParticipantNumber']?></td>
                                                <td name="client" value="<?php echo $ca['CLIENT_ID']?>"><?php $firstname = $ca['CLIENT_FirstName']; $lastname = $ca['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                                <td name="regdate" value="<?php echo $ca['CLIENT_ID']?>"><?php echo date("F d, Y",strtotime($ca['CA_RegDate']))?></td>
                                                <input type="hidden" name="CA_Code" value="<?php echo $ca['CA_Code']?>">
                                                <input type="hidden" name="CLIENT_ID" value="<?php echo $ca['CLIENT_ID']?>">
                                                <input type="hidden" name="SCS_Code" value="<?php echo $sc['SCS_Code']?>">
                                                <input type="hidden" name="action_type" value="delete"/>
                                                <td><center><button name="submit" type="submit" class="btn bg-red">Cancel</button></center></td>
                                            </form>
                                                </tr>

                                                    <?php } }else{ ?>

                                                    <tr><td colspan="6">No Participant(s) found......</td></tr>

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



<?php } }?> 
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

    


</body>

</html>


