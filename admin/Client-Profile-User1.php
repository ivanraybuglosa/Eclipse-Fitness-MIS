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
                <h2>Client Profile</h2>
            </div>
            <?php 
                $id = $_GET['id'];
                $pdo = new dbConnect();
                $clients = $pdo->getProfileRow($id,'client','CLIENT_ID',array('order_by'=>'CLIENT_ID ASC'));
                if(!empty($clients)){ 
                $count = 0; 
                foreach($clients as $client){ 
                $count++;
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            <i class="material-icons">verified_user</i> Client - Profile
                        </a>
                    </li>
                    <li class="active">
                        <i class="material-icons">dashboard</i> Client - <?php $firstname = $client['CLIENT_FirstName']; $lastname = $client['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?>
                    </li>
                </ol>
                </div>
        </div>
           

            
            <div class="card">
                <div class="header">
                
                <h2 class="pull-left"><b><?php $firstname = $client['CLIENT_FirstName']; $lastname = $client['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></b></h2>
                <button name ="submit"  type="button" data-toggle="modal" data-target="#renewmembership-<?php echo $client['CLIENT_ID'] ?>" class="btn bg-green pull-right" style="margin-left:20px;">Membership Registration</button>
                  <!-- MODAL FOR RENEWING MEMBERSHIP -->
            <div class="modal fade" id="renewmembership-<?php echo $client['CLIENT_ID'] ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                   <center>
                    <div class="modal-header">
                       <div class="block-header">
                          <h2><strong>Membership Registration</strong></h2>
                       </div>
                    </div>
                    <form method="post" action="actions/profileAction.php" />
                    <input type="hidden" name="CLIENT_ID" value="<?php echo $client['CLIENT_ID']?>"/>
                        <div class="modal-body">
                            <label style="margin-top: 8px; margin-right:20px;">Membership Type: </label>
                            <select name='type' id="membershiptype" onchange="setMembership();" class="form-control show-tick">
                                <?php 
                                            $pdo = new dbConnect();
                                                $member = $pdo->getRowsDistinct('membership', 'MS_Type');
                                                foreach($member as $members){
                                            ?>
                                                <option value="<?php echo $members['MS_Type']; ?>"><?php echo $members['MS_Type']; ?></option>
                                                   <?php } ?>
                             </select>
                             <label style="margin-top: 8px; margin-right:20px;">Duration: </label>
                             <select name="duration" id="durationtype" onchange="setMembership();" class="form-control show-tick">
                                <?php 
                                    $pdo = new dbConnect();
                                    $member = $pdo->getRowsDistinct('membership', 'MS_Duration');
                                    foreach($member as $members){
                                    ?>
                                    <option  value="<?php echo $members['MS_Duration']; ?>"><?php echo $members['MS_Duration']; ?> Month(s)</option>
                                <?php } ?>
                             </select>
                             <!-- <button type="button" class="btn bg-green" style="margin-top:20px;">Check Price</button>
                             <br>
                             <br>
                             <label style="margin-right:20px;">Price: (Per Month)</label>
                             <input type="text" id="renewprice" name="pricetrain" class="form-control" style="margin-left: 50;" disabled="true"> -->
                 </div>

                 <div class="modal-footer">
                    <input type="hidden" name="expiry" value="<?php echo date('Y-m-d', strtotime(' + $members["MS_Duration"] months', strtotime(date('Y-m-d')))); ?>">
                    <input type="hidden" name="status" value="Member">
                    <input type="hidden" name="action_type" value="enroll"/>
                    <input type="hidden" name="client" value="<?php echo $client['CLIENT_ID']?>"/>
                    <button name ="submit"  value="Member" type="submit" class="btn  bg-green">Register</button>
                 </form>
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 </div> 
                  </center>
                </div>
            </div>
        </div>

            <!-- END OF MODAL FOR RENEWAL -->
            
                <button name ="submit"  type="submit" data-toggle="modal" data-target="#enroltraining" class="btn bg-green pull-right">Personal Training Registration</button>

                  <br>

                  

                </div>
            </div> 
           

            <!-- START OF CLIENT PERSONAL INFORMATION -->
            
            <div class="card">
                <div class="header" style="background:silver;">
                  <h2>Personal Information</h2>
                </div>
                    <form method="POST" action="actions/profileAction.php">
                    <input type="hidden" value="<?php echo $client['CLIENT_ID'];?>" name="CLIENT_ID">
                    <div class="body">
                    <fieldset>
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="lastname">Last Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="lastName" class="form-control" value="<?php echo $client['CLIENT_LastName']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="firstname">First Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="firstName" class="form-control" value="<?php echo $client['CLIENT_FirstName']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="email">User Account</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="userAccount" class="form-control" value="<?php echo $client['CLIENT_userAccount']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="Email" class="form-control" value="<?php echo $client['CLIENT_Email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="contactnum">Contact Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="contactNum" class="form-control" value="<?php echo $client['CLIENT_ContactNumber']; ?>">
                                </div>
                            </div>
                        </div>
                       
                                        <div class="col-md-3">
                                        <label style="margin-top: 9px;">Date of Birth: </label>
                                        </div>
                                        <div class="col-md-3">
                                <?php
                                function get_month()
                                {
                                    $var= "";
                                    for ($m=01; $m<=12; $m++) {
                                        $month=sprintf("%02d", $m);
                                        $var .= '<option value="'.$month.'">'.date('F', mktime(0,0,0,$m, 1,      date('Y'))).' </option>';
                                    }
                                    return $var;
                                }
                                ?>
                                <select class="form-control show-tick" name = "C_month">
                                    <option> - Month - </option>
                                    <?php echo get_month(); ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <?php
                                function get_day()
                                {
                                    $var="";
                                    for ($i = 1; $i < 31; $i++) {
                                        $num_padded=sprintf("%02d", $i);
                                        $var .='<option value="'.$num_padded.'">  '.$num_padded.' </option>';
                                    }
                                    return $var;
                                }
                                ?>
                                <select class="form-control show-tick" name = "C_day">
                                    <option> - Day - </option>
                                    <?php echo get_day(); ?>
                                </select>
                                        </div>
                            <div class="col-md-3">
                                <?php
                                function get_year($start,$end){
                                    $var="";
                                    while($start <= $end){
                                        $var .="<option value=".$start.">".$start."</option>";
                                        $start++;
                                    }
                                    return $var;
                                }
                                ?>
                                <select class="form-control show-tick" name="C_year">
                                    <option> - Year - </option>
                                    <?php echo get_year(1947,2017); ?>
                                </select>
                            </div>
                        <div class="col-md-4">
                        <label>Gender</label>
                            <div class="form-group">
                               <input type="radio" name="gender" id="male" class="with-gap" <?php if($client['CLIENT_Gender']=="Male") echo "checked='true'";?> value="Male">
                               <label for="male">Male</label>
                               <input type="radio" name="gender" id="female" class="with-gap" <?php if($client['CLIENT_Gender']=="Female") echo "checked='true'";   ?> value="Female">
                               <label for="female" class="m-l-20">Female</label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <input type="hidden" name="action_type" value="edit"/>
                            <button name ="submit"  type="submit" class="btn bg-green pull-right" style="margin-right:20px;">MODIFY</button>
                        </div>
                    </form>
                    </fieldset>
                    </div>
                </div>
            </div>
            <!-- END OF CLIENT PERSONAL INFORMATION -->

            <!-- CLIENT PROFILE MEMBERSHIP DETAILS -->
                <?php 
                    $id = $_GET['id'];
                    $pdo = new dbConnect();
                    $memberships = $pdo->profileMembership($id,array("order_by" => "M_Code ASC"));
                        if(!empty($memberships)){
                            $count = 0;
                            foreach($memberships as $members){

                ?>
            <div class="card">
                <div class="header" style="background:silver;">
                  <h2>Membership Information</h2>
                </div>
                
                

                <div class="body">

                    <div class="row clearfix">
                        <div class="col-md-4">
                            <label for="age">Membership Type</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="membertype" class="form-control" value="<?php echo $members['MS_Type']?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="age">Duration</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="memberduration" class="form-control" value="<?php echo $members['MS_Duration']?> Months" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="age">Remaining Days</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="remaining" class="form-control" 
                                    value="<?php 
                                        $date1 = date_create(date("Y-m-d"));
                                        $date2 = date_create($members["M_expiryDate"]);
                                        $days = date_diff($date1,$date2);
                                        echo $days->format('%a days');
                                        ?>"" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="age">Membership Registration Date</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="startdate" class="form-control" value="<?php echo date("F j, Y", strtotime($members['M_regDate']))?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="age">Expiry Date</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="enddate" class="form-control" value="<?php echo date("F j, Y", strtotime($members['M_expiryDate'])) ?>" disabled>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php }} ?>

          
                
            <!-- END OF CLIENT PROFILE MEMBERSHIP DETAILS -->

            <!-- START OF CLIENT ACTIVITY LOG -->
            <div class="card">
                <div class="header" style="background:silver;">
                  <h2>Activity Log</h2>
                </div>

                <div class="body">
                    <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-12">
                                           <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr role="row">
                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Coach</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Activity</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Activity Date</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">Start Time</th>

                                            <th class="center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102px;">End Time</th>
                                            
                                          </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                        $id = $_GET['id'];
                                        $pdo = new dbConnect();
                                        $activities = $pdo->activityRows($id, array("order_by" => "AL_Code ASC"));
                                            if(!empty($activities)){
                                                $count = 0;
                                                foreach($activities as $act){
                                        ?>
                                        
                                        
                                         <tr role="row" class="odd">
                                            
                                            <td><?php $firstname = $act['Coach_FirstName']; $lastname = $act['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                            <td><?php echo $act['Activity']?></td>
                                            
                                            <td><?php echo date("F j, Y", strtotime($act['AL_Date']));?></td>
                                            
                                            <td><?php echo date("g:i A", strtotime($act['AL_StartTime']))?></td>
                                            <td><?php echo date("g:i A", strtotime($act['AL_EndTime']))?></td>
                                        </tr>
                                        <?php } }else{ ?>

                                                    <tr><td colspan="6">No Activities found......</td></tr>

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
            <!-- END OF CLIENT ACTIVITY LOG -->

            <!-- MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS MODALS -->

          

         <!-- MODAL FOR ENROLLING FOR PERSONAL TRAINING -->
         <form method="post" action="actions/trainingAction.php">
         <div class="modal fade" id="enroltraining" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                   <center>
                    <div class="modal-header">
                       <div class="block-header">
                          <h2><strong>Enroll Personal Training</strong></h2>
                       </div>
                    </div>
                 <div class="modal-body">
                          <label style="margin-top: 8px; margin-right:20px;">Package Type: </label>
                                <select name="packageType" id="packagetype" onchange="setval();" class="form-control show-tick">    
                                          <?php 
                                            $pdo = new dbConnect();
                                                $packages = $pdo->getRowsDistinct('trainingpackage', 'TP_PackageType');
                                                foreach($packages as $package){
                                            ?>
                                                <option value="<?php echo $package['TP_PackageType']; ?>"><?php echo $package['TP_PackageType']; ?> Session(s)</option>
                                                   <?php } ?>
                                </select>

                                  <script>

                                      function setval() {
                                        var package = document.getElementById('packagetype').value;
                                        var coach = document.getElementById('coachtype').value;
                                        var validity = document.getElementById('validity');
                                        var price = document.getElementById('price');

                                        //validity.value = <echo $trainingpackage['TP_Validity']; ?>
                                        //price.value = <echo $trainingpackage['TP_Price']; ?>
                                        //and so on and so forth

                                        if(package == "1") { 
                                          validity.value = "7 Days"; 
                                            if(coach == "j") {
                                                price.value = "500"
                                            } else if (coach == "s") {
                                                price.value = "600"
                                            } else {
                                                price.value = "600"
                                            }
                                        } else if(package == "8") {
                                            validity.value = "56 Days";
                                            if(coach == "j") {
                                                price.value = "3500"
                                            } else if (coach == "s") {
                                                price.value = "4800"
                                            } else {
                                                price.value = "4800"
                                            }
                                        } else if(package == "12") {
                                            validity.value = "84 Days";
                                            if(coach == "j") {
                                                price.value = "6000"
                                            } else if (coach == "s") {
                                                price.value = "7200"
                                            } else {
                                                price.value = "7200"
                                            }
                                        } else {
                                            validity.value = "168 Days";
                                            if(coach == "j") {
                                                price.value = "12000"
                                            } else if (coach == "s") {
                                                price.value = "14400"
                                            } else {
                                                price.value = "14400"
                                            }
                                        }
                                    }
                                        function setSpecialty() {
                                            var coach = document.getElementById('assigncoach').value;
                                            //place specialty input value based on value of coach option and
                                            //$coach['COACH_SPECIALTY'];
                                        }

                                        function setMembership() {
                                            // var memtype = document.getElementById('membershiptype').value;
                                            // var duration = document.getElementById('durationtype').value;
                                            
                                            var price = document.getElementById('renewprice')

                                            <?php 
                                                $pdo = new dbConnect();
                                                $member = $pdo->selectMembershipPrice('type','duration',array('order_by'=>'MS_Code ASC'));
                                                foreach($member as $members){
                                            ?>
                                            // if(memtype == <?php echo $members['MS_Type']; ?> && duration == <?php echo $members['MS_duration'];?>){
                                                price.value = <?php echo $members['MS_Price']?>
                                            }
                                            <?php } ?>
                                            // if(memtype == "regular") {
                                            //     if(duration == "30") {
                                            //         price.value = "1,999"
                                            //     } else if (duration == "90") {
                                            //         price.value = "1899"
                                            //     } else if (duration == "180") {
                                            //         price.value = "1799"
                                            //     } else  {
                                            //         price.value = "1699"
                                            //     }

                                            // } else {
                                            //     if(duration == "30") {
                                            //         price.value = "1,299"
                                            //     } else if (duration == "90") {
                                            //         price.value = "1199"
                                            //     } else if (duration == "180") {
                                            //         price.value = "1099"
                                            //     } else  {
                                            //         price.value = "999"
                                            //     }
                                            // }
                                        }
                                  </script>
                            
                            <label style="margin-top: 8px; margin-right:20px;">Coach Type: </label>
                                    <select name="coachType" id="coachtype" onchange="setval();" class="form-control show-tick">
                                       <?php 
                                            $pdo = new dbConnect();
                                                $coaches = $pdo->getRowsDistinct('coach', 'Coach_Type');
                                                foreach($coaches as $coach){
                                            ?>
                                                <option value="<?php echo $coach['Coach_Type']; ?>"><?php echo $coach['Coach_Type']; ?></option>
                                                   <?php } ?>

                                    </select>
                            <!-- <label style="margin-top: 8px; margin-right:20px;">Validity:</label>
                            <input id="validity" type="text" name="validitytrain" class="form-control" disabled>
                            <label style="margin-top: 8px; margin-right:20px;">Price: </label>
                            <input id="price" type="text" name="pricetrain" class="form-control" disabled> -->
                            <label style="margin-top: 8px; margin-right:20px;">Assigned Coach: </label>
                            <select name="coach" id="assigncoach" class="form-control show-tick">
                                          <?php 
                                            $pdo = new dbConnect();
                                                $coaches = $pdo->getRows('coach',array('order_by'=>'COACH_ID ASC'));
                                                foreach($coaches as $coach){
                                            ?>
                                                <option value="<?php echo $coach['COACH_ID']; ?>"><?php $firstname = $coach['Coach_FirstName']; $lastname = $coach['Coach_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></option>
                                                   <?php } ?>
                            </select>
                            <!-- <label style="margin-top: 8px; margin-right:20px;">Specialty: </label>
                            <input type="text" name="specialtytrain" class="form-control" disabled="true"> -->
                 </div>
                 <div class="modal-footer">
                    <input type="hidden" name="action_type" value="add">
                    <input type="hidden" name="CLIENT_ID" value="<?php echo $client['CLIENT_ID']; ?>">
                     <button name="submit" type="submit" class="btn  bg-green">ENROLL</button>
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 </form>
                 </div> 
                  </center>
                </div>
            </div>
        </div>

         <!-- END OF MODAL FOR PT -->
     <?php }} ?>
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
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
</body>

</html>
