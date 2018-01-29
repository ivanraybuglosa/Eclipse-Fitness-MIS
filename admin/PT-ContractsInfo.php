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
                <h2>Client Training</h2>
            </div>
        </div>
            <?php
                $id = $_GET['id'];
                    
               
                $pdo = new dbConnect();
                $ptClients = $pdo->IDrowsjoin($id,array('order_by'=>'TL_Code ASC'));
                if(!empty($ptClients)){ 
                $count = 0; 
                foreach($ptClients as $pt){ 
                $count++;
                ?>
            <div class="card">
                <div class="header">
                
                <h2 class="pull-left"><b><?php $firstname = $pt['CLIENT_FirstName']; $lastname = $pt['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></b></h2>
                <button name ="submit"  type="button" data-toggle="modal" data-target="#measurement-<?php echo $pt['TL_Code'] ?>" class="btn bg-green pull-right" style="margin-left:20px; margin-top:-5px;">Health Conditions</button>
                  <!-- MODAL FOR RENEWING MEMBERSHIP -->
            <div class="modal fade" id="measurement-<?php echo $pt['TL_Code'] ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                   <center>
                    <div class="modal-header">
                       <div class="block-header">
                          <h2><strong>Health Conditions</strong></h2>
                       </div>
                    </div>
                    <form method="post" action="actions/healthAction.php" />
                    
                 <div class="modal-body">
                    
                    <div class="body container-fluid">
                        <div class="row clearfix">
                        <div class="demo-checkbox" style="margin:30px;">
                            <div class="col-md-4">
                                <input name="health[]" type="checkbox" value="Asthma" id="md_checkbox_1"/>
                                <label for="md_checkbox_1">Asthma</label>
                                <input name="health[]" type="checkbox" value="Hypertension" id="md_checkbox_2"/>
                                <label for="md_checkbox_2">Hypertension</label>
                                <input name="health[]" type="checkbox" value="Stroke" id="md_checkbox_3"/>
                                <label for="md_checkbox_3">Stroke</label>
                                <input name="health[]" type="checkbox" value="Heart Disease" id="md_checkbox_4" />
                                <label for="md_checkbox_4">Heart Disease</label>
                                <input name="health[]" type="checkbox" value="High Blood" id="md_checkbox_5" />
                                <label for="md_checkbox_5">High Blood</label>
                                <input name="health[]" type="checkbox" value="Obesity" id="md_checkbox_6"/>
                                <label for="md_checkbox_6">Obesity</label>
                            </div>
                            <div class="col-md-4">
                                <input name="health[]" type="checkbox" value="Back Pain" id="md_checkbox_7" />
                                <label for="md_checkbox_7">Back Pain</label>
                                <input name="health[]" type="checkbox" value="Osteoporosis" id="md_checkbox_8" />
                                <label for="md_checkbox_8">Osteoporosis</label>
                                <input name="health[]" type="checkbox" value="Disability" id="md_checkbox_9" />
                                <label for="md_checkbox_9">Disability</label>
                                <input name="health[]" type="checkbox" value="Acidity" id="md_checkbox_10" />
                                <label for="md_checkbox_10">Acidity</label>
                                <input name="health[]" type="checkbox" value="Seizure" id="md_checkbox_11" />
                                <label for="md_checkbox_11">Seizure</label>
                                <input name="health[]" type="checkbox" value="Paralysis" id="md_checkbox_12" />
                                <label for="md_checkbox_12">Paralysis</label>
                            </div>
                            <div class="col-md-4">
                                <input name="health[]" type="checkbox" value="Epilepsy" id="md_checkbox_13" />
                                <label for="md_checkbox_13">Epilepsy</label>
                                <input name="health[]" type="checkbox" value="Arthritis" id="md_checkbox_14" />
                                <label for="md_checkbox_14">Arthritis</label>
                                <input name="health[]" type="checkbox" value="Diabetes" id="md_checkbox_15" />
                                <label for="md_checkbox_15">Diabetes</label>
                                <input name="health[]" type="checkbox" value="Anemia" id="md_checkbox_16" />
                                <label for="md_checkbox_16">Anemia</label>
                                <input name="health[]" type="checkbox" value="Fibromyalgia" id="md_checkbox_17"/>
                                <label for="md_checkbox_17">Fibromyalgia</label>
                                <input name="health[]" type="checkbox" value="Sclerosis" id="md_checkbox_18" />
                                <label for="md_checkbox_18">Sclerosis</label>
                            </div>
                                <div class="row container-fluid">
                            <div class="col-md-4">
                                <label for="firstname" style="margin-top:10px;">Other Health Conditions</label>
                            </div>
                            <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-line">
                                 
                                   <input type="text" name="health[]" id="firstname" class="form-control" placeholder="Separate Other Health Conditions by a comma(,)">
                                   
                                
                                </div>
                            </div>

                        </div>


                            <div class="row">
                            <div class="col-md-3">
                                
                                <label>Client Performance Level</label>
                            </div>
                            <div class="col-md-9">
                                <div class="demo-radio-button">
                                    <input type="radio" id="beginner" name="performance" value="Beginner" class="form-control">
                                    <label for="beginner">Beginner</label>
                                    <input type="radio" id="intermediate" name="performance" value="Intermediate" class="form-control">
                                    <label for="intermediate">Intermediate</label>
                                    <input type="radio" id="advanced" name="performance" value="Advanced" class="form-control">
                                    <label for="advanced">Advanced</label>
                                </div>
                                </div>
                            </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

                 </div>

                 <div class="modal-footer">
                    <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>"/>
                    <input type="hidden" name="action_type" value="healthcondition"/>
                    <button name ="submit"  value="submit" type="submit" class="btn  bg-green">SUBMIT</button>
                 </form>
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 </div> 
                  </center>
                </div>
            </div>
        </div>

            <!-- END OF MODAL FOR RENEWAL -->
            
                <button name ="submit"  type="submit" data-toggle="modal" data-target="#finalMeasurement" class="btn bg-green pull-right" style="margin-left:20px; margin-top:-5px;">Final Body Measurements</button>

                <button name ="submit"  type="submit" data-toggle="modal" data-target="#initialMeasurement" class="btn bg-green pull-right" style="margin-top:-5px;">Initial Body Measurements</button>



                  <br>

                  

                </div>
            </div> 
            <!-- End of health conditions -->

                  <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Edit Information</a></li>
                                        <li><a data-toggle="modal" data-target="#trainclient" onclick="setMembership();">Start Training</a></li>
                                    </ul>
                                </li>
                            </ul> -->

            <!-- START OF CLIENT PERSONAL INFORMATION -->
            <div class="card">
                <div class="header" style="background:silver;">
                  <h2>Personal Training Contract Information</h2>
                </div>

                <div class="body container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <label for="lastname">Coach Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="coachname" class="form-control" value="<?php $firstname = $pt['COACH_FirstName']; $lastname = $pt['COACH_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="firstname">Coach Type</label>
                            <div class="form-group">
                                <div class="form-line">
                                 
                                   <input type="text" id="coachname" class="form-control" value="<?php echo $pt['Coach_Type']?>" disabled>
                                   
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Package Type</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="coachname" class="form-control" value="<?php echo $pt['TP_PackageType']?> Sessions" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="contactnum">Validity (Days)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="validdays" class="form-control" value="<?php echo $pt['TP_Validity']?> Days" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Remaining (Days)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="remdays" class="form-control" 
                                        value="<?php 
                                        $date1 = date_create(date("Y-m-d"));
                                        $date2 = date_create($pt["TL_Expiry"]);
                                        $days = date_diff($date1,$date2);
                                        echo $days->format('%a days');
                                        ?>" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <label for="age">Registration Date</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="startdate" class="form-control" value="<?php echo date("F j, Y", strtotime($pt['TL_RegDate']));?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Expiry Date</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="expiry" class="form-control" value="<?php echo date("F j, Y", strtotime($pt['TL_Expiry'])); ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-9">
                            <label for="age">Health Conditions</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="expiry" class="form-control" value="<?php echo $pt['TL_HealthConditions']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Client Performance Level</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="expiry" class="form-control" value="<?php echo $pt['TL_ClientPerformance']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header" style="background:silver;">
                    <h2>Personal Training Session</h2>
                </div> 
                 <form method="post" action="actions/trainingSessionAction.php">
                <div class="body">   
                   <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="form-line">
                                <h5 class="pull-left">Start Time</h5>
                                <input type="time" name="st" class="form-control" placeholder="Start Time" min="07:00" max="22:00"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <div class="form-line">
                                <h5 class="pull-left">End Time</h5>
                                <input type="time" name="et" class="form-control" placeholder="End Time" min="07:00" max="22:00"/>
                            </div>
                        </div>
                    </div>

                    
                        <div class="col-md-4"> 
                            <div class="input-group">
                            <div class="form-line">
                                <h5 class="pull-left">Exercise</h5>
                                <input type="text" name="exercise" class="form-control" placeholder="Enter Session Exercise"/>
                            </div>
                        </div>
                              </div>
                              <div class="col-md-4">
                                
                                <div class="input-group">
                            <div class="form-line">
                                <h5 class="pull-left">Sets</h5>
                                <input type="number" name="sets" class="form-control" placeholder=" " min="0" max="10"/>
                            </div>
                        </div>
                                </div>
                                <div class="col-md-4">
                               
                                <div class="input-group">
                            <div class="form-line">
                                <h5 class="pull-left">Repetitions</h5>
                                <input type="number" name="reps" class="form-control" placeholder=" " min="0" max="500" />
                            </div>
                        </div>
                                </div>
                        <div class="pull-right">
                            <input type="hidden" name="date" value="<?php echo date("Y-m-d")?>">
                            <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                            <input type="hidden" name="client" value="<?php echo $pt['CLIENT_ID']?>">
                            <input type="hidden" name="packageType" value="<?php echo $pt['TP_PackageType']?>">
                            <input type="hidden" name="coach" value="<?php echo $pt['COACH_ID']?>">
                            <input type="hidden" name="action_type" value="add"/>
                            <button type="submit" name="submit" id="submit" class="btn bg-green pull-left btn-success" style="margin-right:20px; margin-top:35px;">SUBMIT </button> 
                        </div>
                    
                </form>
                </div>
            </div>
         </div>
         <?php
            $id = $_GET['id']; 
            $pdo = new dbConnect();
            $measurements = $pdo->measurementInitial($id,array('order_by'=>'M_Code ASC'));
                if(!empty($measurements)){ 
                $count = 0; 
                foreach($measurements as $measurement){ 
                $count++;
        ?> 
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <form method="post" action="actions/measurementAction.php" >
                <div class="header" style="background:silver;">
                    <h2>Body Mass Index and Measurements(Initial)</h2>
                </div>
                 
                <div class="body container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label for="age">Weight(lbs.)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="weight" class="form-control" value="<?php echo $measurement['M_Weight']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Skeletal Mass(kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="skeletalMass" class="form-control" value="<?php echo $measurement['M_SkeletalMass']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Fat Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="bodyFatMass" class="form-control" value="<?php echo $measurement['M_BodyFatMass']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Fat Free Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="fatFreeMass" class="form-control" value="<?php echo $measurement['M_FatFreeMass']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Mass Index(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="bodyMassIndex" class="form-control"  value="<?php echo $measurement['M_BodyMassIndex']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Percent Body Fat(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="percentBodyFat" class="form-control" value="<?php echo $measurement['M_PercentBodyFat']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist-Hip Ratio(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="waistHipRatio" class="form-control"  value="<?php echo $measurement['M_WaistHipRatio']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Basal-Metabolism(J/(h. kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="basalMetabolism" class="form-control" value="<?php echo $measurement['M_BasalMetabolicRate']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class="col-md-3">
                            <label for="age">Left Upper Arm(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="leftUpperArm" class="form-control"  value="<?php echo $measurement['M_LeftUpperArm']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Arm(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="rightUpperArm" class="form-control" value="<?php echo $measurement['M_RightUpperArm']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Chest(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="chest" class="form-control" value="<?php echo $measurement['M_Chest']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="waist" class="form-control"  value="<?php echo $measurement['M_Waist']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Hip(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="hip" class="form-control" value="<?php echo $measurement['M_Hips']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Left Upper Thigh(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="leftUpperThigh" class="form-control" value="<?php echo $measurement['M_LeftUpperThigh']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Thigh(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="rightUpperThigh" class="form-control" value="<?php echo $measurement['M_RightUpperThigh']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Resting Heart Rate(bpm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="restingHeartRate" class="form-control" value="<?php echo $measurement['M_RestingHR']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                            <input type="hidden" name="client" value="<?php echo $pt['CLIENT_ID']?>">
                            <input type="hidden" name="type" value="Initial">
                            <input type="hidden" name="action_type" value="modifyInitial">
                            <button type="submit" name="submit" class="btn  waves-effect btn-success pull-right" data-type='success'>&nbsp; MODIFY &nbsp;</button>
                        </div>
                        
                    </div>
                    </div>
                    <?php }} ?>
                </form>
                </div>
            </div>
        </div>

        <?php
                        $id = $_GET['id']; 
                        $pdo = new dbConnect();
                        $measurements = $pdo->measurementFinal($id,array('order_by'=>'M_Code ASC'));
                            if(!empty($measurements)){ 
                                $count = 0; 
                                foreach($measurements as $measurement){ 
                                $count++;
                                        ?>
        
        <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <form method="post" action="actions/measurementAction.php" >
                <div class="header" style="background:silver;">
                    <h2>Body Mass Index and Measurements(Final)</h2>
                </div>
                
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label for="age">Weight(lbs.)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="weight" class="form-control" value="<?php echo $measurement['M_Weight']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Skeletal Mass(kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="skeletalMass" class="form-control" value="<?php echo $measurement['M_SkeletalMass']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Fat Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="bodyFatMass" class="form-control" value="<?php echo $measurement['M_BodyFatMass']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Fat Free Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="fatFreeMass" class="form-control" value="<?php echo $measurement['M_FatFreeMass']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Mass Index(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="bodyMassIndex" class="form-control"  value="<?php echo $measurement['M_BodyMassIndex']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Percent Body Fat(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="percentBodyFat" class="form-control" value="<?php echo $measurement['M_PercentBodyFat']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist-Hip Ratio(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="waistHipRatio" class="form-control"  value="<?php echo $measurement['M_WaistHipRatio']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Basal-Metabolism(J/(h. kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="basalMetabolism" class="form-control" value="<?php echo $measurement['M_BasalMetabolicRate']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class="col-md-3">
                            <label for="age">Left Upper Arm(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="leftUpperArm" class="form-control"  value="<?php echo $measurement['M_LeftUpperArm']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Arm(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="rightUpperArm" class="form-control" value="<?php echo $measurement['M_RightUpperArm']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Chest(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="chest" class="form-control" value="<?php echo $measurement['M_Chest']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="waist" class="form-control"  value="<?php echo $measurement['M_Waist']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Hip(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="hip" class="form-control" value="<?php echo $measurement['M_Hips']?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Left Upper Thigh(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="leftUpperThigh" class="form-control" value="<?php echo $measurement['M_LeftUpperThigh']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Thigh(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="rightUpperThigh" class="form-control" value="<?php echo $measurement['M_RightUpperThigh']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Resting Heart Rate(bpm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="restingHeartRate" class="form-control" value="<?php echo $measurement['M_RestingHR']?>">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                        <input type="hidden" name="client" value="<?php echo $pt['CLIENT_ID']?>">
                        <input type="hidden" name="type" value="Final">
                        <input type="hidden" name="action_type" value="modifyFinal"/>
                        <div class="col-md-12">
                            <button type="submit" class="btn  waves-effect btn-success pull-right" data-type='success'>&nbsp; MODIFY &nbsp;</button>
                        </div>
                    </div>
                    
                    </div>
                    <?php }} ?>
                </form>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
            window.onload = function () {
                <?php
                    $id = $_GET['id']; 
                    $pdo = new dbConnect();
                    $measurements = $pdo->measurementInitial($id,array('order_by'=>'M_Code ASC'));
                        if(!empty($measurements)){ 
                        $count = 0; 
                        foreach($measurements as $measurement){ 
                        $count++;
                ?>
                var bmi = new CanvasJS.Chart("bmi", {            
                title:{
                text: "Body Mass Index Difference"              
                },
                legend: {
                 horizontalAlign: "center", // left, center ,right 
                 verticalAlign: "top",  // top, center, bottom
                },
                data: [  //array of dataSeries     
                { //dataSeries - first quarter
               /*** Change type "column" to "bar", "area", "line" or "pie"***/        
                type: "column",
                showInLegend: true, 
                name: "Initial Measurement",
                dataPoints: [
                { label: "Weight", y: <?php echo $measurement['M_Weight'] ?> },
                { label: "Skeletal Mass", y: <?php echo $measurement['M_SkeletalMass'] ?> },
                { label: "Body Fat Mass", y: <?php echo $measurement['M_BodyFatMass'] ?> },
                { label: "Fat Free Mass", y: <?php echo $measurement['M_FatFreeMass'] ?> },
                { label: "Body Mass Index", y: <?php echo $measurement['M_BodyMassIndex'] ?> },
                { label: "Percent Body Fat", y: <?php echo $measurement['M_PercentBodyFat'] ?> },
                { label: "Waist Hip Ratio", y: <?php echo $measurement['M_WaistHipRatio'] ?> },
                { label: "Basal Metabolic Rate", y: <?php echo $measurement['M_BasalMetabolicRate'] ?> }
                ]
                 },
                 <?php }}?>
                 { //dataSeries - second quarter
                 <?php
                    $id = $_GET['id']; 
                  $pdo = new dbConnect();
                    $measurements = $pdo->measurementFinal($id,array('order_by'=>'M_Code ASC'));
                        if(!empty($measurements)){ 
                        $count = 0; 
                        foreach($measurements as $measurement){ 
                        $count++;
                ?>
                type: "column",
                showInLegend: true,
                name: "Final Measurement",                
                dataPoints: [
                { label: "Weight", y: <?php echo $measurement['M_Weight'] ?> },
                { label: "Skeletal Mass", y: <?php echo $measurement['M_SkeletalMass'] ?> },
                { label: "Body Fat Mass", y: <?php echo $measurement['M_BodyFatMass'] ?> },
                { label: "Fat Free Mass", y: <?php echo $measurement['M_FatFreeMass'] ?> },
                { label: "Body Mass Index", y: <?php echo $measurement['M_BodyMassIndex'] ?> },
                { label: "Percent Body Fat", y: <?php echo $measurement['M_PercentBodyFat'] ?> },
                { label: "Waist Hip Ratio", y: <?php echo $measurement['M_WaistHipRatio'] ?> },
                { label: "Basal Metabolic Rate", y: <?php echo $measurement['M_BasalMetabolicRate'] ?> }

                <?php }} ?>
                ]
            }
            ]
              });
                var bmd = new CanvasJS.Chart("bmd", {            
                title:{
                text: "Body Measurement Difference"              
                },
                legend: {
                 horizontalAlign: "center", // left, center ,right 
                 verticalAlign: "top",  // top, center, bottom
                },
                <?php
                    $id = $_GET['id']; 
                    $pdo = new dbConnect();
                    $measurements = $pdo->measurementInitial($id,array('order_by'=>'M_Code ASC'));
                        if(!empty($measurements)){ 
                        $count = 0; 
                        foreach($measurements as $measurement){ 
                        $count++;
                ?>
                data: [  //array of dataSeries     
                { //dataSeries - first quarter
               /*** Change type "column" to "bar", "area", "line" or "pie"***/        
                type: "column",
                showInLegend: true,
                legendText: "Initial Measurement",
                name: "Initial Measurement",
                dataPoints: [                                  
                { label: "LeftUpperArm", y: <?php echo $measurement['M_LeftUpperArm']?> },
                { label: "RightUpperArm", y: <?php echo $measurement['M_RightUpperArm']?> },
                { label: "Chest", y: <?php echo $measurement['M_Chest']?> },
                { label: "Waist", y: <?php echo $measurement['M_Waist']?>},
                { label: "Hips", y: <?php echo $measurement['M_Hips']?> },
                { label: "Left Upper Thigh", y: <?php echo $measurement['M_LeftUpperThigh']?> },
                { label: "Right Upper high", y: <?php echo $measurement['M_LeftUpperThigh']?> },
                { label: "RestingHR", y: <?php echo $measurement['M_RestingHR']?>}
                ]
                <?php }} ?>
                 },
                 { //dataSeries - second quarter
                <?php
                    $id = $_GET['id']; 
                    $pdo = new dbConnect();
                    $measurements = $pdo->measurementFinal($id,array('order_by'=>'M_Code ASC'));
                        if(!empty($measurements)){ 
                        $count = 0; 
                        foreach($measurements as $measurement){ 
                        $count++;
                ?>
                type: "column",
                showInLegend: true,
                legendText: "Final Measurement",
                name: "Final Measurement",                
                dataPoints: [                                  
                { label: "LeftUpperArm", y: <?php echo $measurement['M_LeftUpperArm']?> },
                { label: "RightUpperArm", y: <?php echo $measurement['M_RightUpperArm']?> },
                { label: "Chest", y: <?php echo $measurement['M_Chest']?> },
                { label: "Waist", y: <?php echo $measurement['M_Waist']?>},
                { label: "Hips", y: <?php echo $measurement['M_Hips']?> },
                { label: "Left Upper Thigh", y: <?php echo $measurement['M_LeftUpperThigh']?> },
                { label: "Right Upper high", y: <?php echo $measurement['M_LeftUpperThigh']?> },
                { label: "RestingHR", y: <?php echo $measurement['M_RestingHR']?>}
                ]
            }
            <?php }} ?>
            ]
              });

                bmi.render();
                bmd.render();
              }
  </script>
        <div class="card">
                    <div class="header">
                       <h2>Body Mass Index Measurement Difference</h2>
                    
                    </div>
            <div class="body">
             
                    <div class="col-s-12">
                         <div id="bmi" style="width: 100%; height: 400px"></div>
                    </div>
                    <br>
                    <div class="container-fluid">

                    <div class="col-sm-4">
                        <div class="info-box-3 bg-green">
                            <div class="content">
                                <div class="text">Underweight</div>
                                <div class="number">< 18.5(Kg)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info-box-3 bg-green">
                            <div class="content">
                                <div class="text">Normal Weight</div>
                                <div class="number">18.5–24.9(Kg)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info-box-3 bg-green">
                            <div class="content">
                                <div class="text">Overweight</div>
                                <div class="number">25.0–29.9(Kg)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info-box-3 bg-green">
                            <div class="content">
                                <div class="text">Class I obesity</div>
                                <div class="number">30.0–34.9(Kg)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info-box-3 bg-green">
                            <div class="content">
                                <div class="text">Class II obesity</div>
                                <div class="number">35.0–39.9(Kg)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="info-box-3 bg-green">
                            <div class="content">
                                <div class="text">Class III obesity</div>
                                <div class="number">≥ 40.0(Kg)</div>
                            </div>
                        </div>
                    </div>
            </div>  
            <?php 
            $id = $_GET['id'];
            $pdo = new dbConnect();
            $classes = $pdo->measurementClassInitial($id,array('order_by' => 'M_Code ASC'));
                if(!empty($classes)){
                    $count = 0;
                    foreach($classes as $class){
                    $count++;
            ?>
            
                <h4 id="initial">Initial BMI Classification: <?php echo $class['M_Classification']?></h4>
            <?php }}?>
            <?php 
            $id = $_GET['id'];
            $pdo = new dbConnect();
            $classes = $pdo->measurementClassFinal($id,array('order_by' => 'M_Code ASC'));
                if(!empty($classes)){
                    $count = 0;
                    foreach($classes as $class){
                    $count++;
            ?>     
                   
                <h4 id="final">Final BMI Classification: <?php echo $class['M_Classification']?></h4>
            <?php }}?>
                  
                   
                 
        </div>
    </div>



        <div class="card">
                    <div class="header">
                       <h2>Body Measurement Difference</h2>
                    </div>
                  <div class="body">
                    <div class="col-s-12">
                         <div id="bmd" style="width: 100%; height: 400px"></div>
                    </div>
                 </div>
        </div>






            <!-- END OF CLIENT PROFILE MEMBERSHIP DETAILS -->

            <!-- START OF CLIENT ACTIVITY LOG -->
            <div class="card">
                <div class="header" style="background:silver;">
                  <h2>Personal Training Contract and Sessions</h2>
                </div>

                
                    <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Contract #</th>
                                            <th>Coach Name</th>
                                            <th>Health Conditions</th>
                                            <th>Performance Level</th>
                                            <th>Sessions</th>
                                            <th>Enrollment Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <?php 
                                            $pdo = new dbConnect();
                                            $contracts = $pdo->contracts($pt['CLIENT_ID'],array("order_by" => "M_Code ASC"));
                                                if(!empty($contracts)){
                                                    $count = 0;
                                                    foreach($contracts as $contract){
                                            ?>
                                            <td><?php echo $contract['ContractNumber']?></td>
                                            <td><?php $firstname = $contract['COACH_FirstName']; $lastname = $contract['COACH_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></td>
                                            <td><?php echo $contract['TL_HealthConditions']?></td>
                                            <td><?php echo $contract['TL_ClientPerformance']?></td>
                                            <td><?php echo $contract['TP_PackageType'] ?></td>

                                            <td><?php echo date("F j, Y", strtotime($contract['TL_RegDate']))?></td>
                                            <td><button type="button" class="btn bg-green btn-success" data-toggle="modal" data-target="#sessions-<?php echo $contract['TL_Code']?>">Sessions</button>
                                             
                                            <div class="modal fade" id="sessions-<?php echo $contract['TL_Code']?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                   <center>
                    <div class="modal-header">
                       <div class="block-header">
                          <h2><strong>Contract <?php echo $contract['ContractNumber']?> Sessions</strong></h2>
                       </div>
                    </div>
                 <div class="modal-body">
                    <input type="hidden" value="<?php echo $contract['TL_Code']?>" >
                     <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Session #</th>
                                            <th>Date</th>
                                            <th>Exercise</th>
                                            <th>Sets</th>
                                            <th>Repetitions</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php 
                                        $pdo = new dbConnect();
                                        $id = $_GET['id'];
                                        $sessions = $pdo->sessions($contract['TL_Code'],array ('order_by' => 'TLS_Code ASC'));
                                        if(!empty($sessions)){ 
                                            $count = 0; 
                                            foreach($sessions as $session){ 
                                            $count++;

                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $session['SessionNumber']?></td>
                                            <td><?php echo date("F j, Y", strtotime($session['TLS_Date']))?></td>
                                            <td><?php echo $session['TLS_Exercise']?></td>
                                            <td><?php echo $session['TLS_Sets']?></td>
                                            <td><?php echo $session['TLS_Reps'] ?></td>
                                            <td><?php echo date("g:i A", strtotime($session['TLS_StartTime']));?></td>
                                            <td><?php echo date("g:i A", strtotime($session['TLS_EndTime']));?></td>
                                        </tr>
                                        <?php } }else{ ?>

                                                    <tr><td colspan="7">No Session(s) found......</td></tr>

                                                    <?php } ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            

                </div>    
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 
                 </div> 
                  </center>
                </div>
            </div>
         </div>



                                            </td>
                                            
                                            
                                            
                                        </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>

                            </div>
                </div>
            
        </div>

        
       
         <!-- MODAL FOR ENROLLING FOR PERSONAL TRAINING -->
         <form method="post" action="actions/measurementAction.php">
         <div class="modal fade" id="initialMeasurement" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                   <center>
                    <div class="modal-header">
                       <div class="block-header">
                          <h2><strong>Initial Body Mass Index and Body Measurements</strong></h2>
                       </div>
                    </div>
                 <div class="modal-body">
                          <div class="row">
                <div class="col-md-12">
                
                    <form method="post" action="actions/measurementAction.php" >
             
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label for="age">Weight(kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="weight" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Skeletal Mass(kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="skeletalMass" class="form-control"   >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Fat Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="bodyFatMass" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Fat Free Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="fatFreeMass" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Mass Index(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="bodyMassIndex" class="form-control"  >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Percent Body Fat(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="percentBodyFat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist-Hip Ratio(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="waistHipRatio" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Basal-Metabolism</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="basalMetabolism" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class="col-md-3">
                            <label for="age">Left Upper Arm</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="leftUpperArm" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Arm</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="rightUpperArm" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Chest</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="chest" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="waist" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Hip</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="hip" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Left Upper Thigh</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="leftUpperThigh" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Thigh</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="rightUpperThigh" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Resting Heart Rate</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="restingHeartRate" class="form-control" >
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
               
                </div>
            </div>
        
                 </div>
                 <div class="modal-footer">
                    <input type="hidden" name="type" value="Initial">
                            <input type="hidden" name="date" value="<?php echo date("Y-m-d")?>">
                            <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                            <input type="hidden" name="CLIENT_ID" value="<?php echo $pt['CLIENT_ID']?>">
                            <input type="hidden" name="action_type" value="add" />
                     <button name="submit" type="submit" class="btn  bg-green">SUBMIT</button>
                     
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 </form>
                 </div> 
                  </center>
                </div>
            </div>
        </div>

        <!-- MODAL FOR ENROLLING FOR PERSONAL TRAINING -->
         <form method="post" action="actions/measurementAction.php">
         <div class="modal fade" id="finalMeasurement" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                   <center>
                    <div class="modal-header">
                       <div class="block-header">
                          <h2><strong>Final Body Mass Index and Body Measurements</strong></h2>
                       </div>
                    </div>
                 <div class="modal-body">
                          <div class="row">
                <div class="col-md-12">
                
                    <form method="post" action="actions/measurementAction.php" >
             
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label for="age">Weight(kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="weight" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Skeletal Mass(kg)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="skeletalMass" class="form-control"   >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Fat Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="bodyFatMass" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Fat Free Mass(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="fatFreeMass" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Body Mass Index(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="bodyMassIndex" class="form-control"  >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Percent Body Fat(%)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="percentBodyFat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist-Hip Ratio(cm)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="waistHipRatio" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Basal-Metabolism</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="basalMetabolism" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class="col-md-3">
                            <label for="age">Left Upper Arm</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="leftUpperArm" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Arm</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="rightUpperArm" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Chest</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="chest" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Waist</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="waist" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Hip</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="hip" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Left Upper Thigh</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="leftUpperThigh" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Right Upper Thigh</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="rightUpperThigh" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="age">Resting Heart Rate</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="restingHeartRate" class="form-control" >
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
               
                </div>
            </div>
        
                 </div>
                 <div class="modal-footer">
                        <input type="hidden" name="type" value="Final">
                        <input type="hidden" name="date" value="<?php echo date("Y-m-d")?>">
                        <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                        <input type="hidden" name="CLIENT_ID" value="<?php echo $pt['CLIENT_ID']?>">
                        <input type="hidden" name="action_type" value="add" />
                     <button name="submit" type="submit" class="btn  bg-green">SUBMIT</button>
                     
                     <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
                 </form>
                 </div> 
                  </center>
                </div>
            </div>
        </div>

         <!-- END OF MODAL FOR PT -->
        <?php  }} ?>
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

    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>
    <script src="canvas/jquery.min.js"></script>
    <script src="canvas/jquery.canvasjs.min.js"></script>

    <script src="../assets/js/pages/charts/attendance_chart.js"></script>
    <script src="../assets/js/pages/charts/chartjsnew.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>    
</body>

</html>
