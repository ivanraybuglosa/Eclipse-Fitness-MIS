<?php
include "../dbConnect.php";
session_start();
if (!isset($_SESSION['loggedIn'])) {
  $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  echo "<script>alert('Unauthorized access!Please login! ');window.location.href='../login.php';</script>";
}

include("includes/header.php"); ?>
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>Personal Training - Client Profile</h2>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <ol class="breadcrumb">
            <li>
              <a href="index.php">
                <i class="material-icons">dashboard</i> Dashboard
              </a>
            </li>
            <li>
              <a href="index.php">
                <i class="material-icons">perm_contact_calendar</i> Personal Training - Contracts
              </a>
            </li>
            <li class="active">
              <i class="material-icons">dashboard</i> Client - <?php $firstname = $pt['CLIENT_FirstName']; $lastname = $pt['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?>
            </li>
          </ol>
        </div>
      </div>



      <div class="card">
        <div class="body bg-green">
          <div class="row clearfix">

            <h2 class="pull-left"><b><?php $firstname = $pt['CLIENT_FirstName']; $lastname = $pt['CLIENT_LastName']; $fullname=$firstname." ".$lastname; echo $fullname ; ?></b></h2>

            <button name ="submit"  type="button" data-toggle="modal" data-target="#measurement-<?php echo $pt['TL_Code'] ?>" class="btn bg-light-green pull-right" style="margin-left:15px; margin-top:18px; margin-right:5px;">Health Conditions</button>


            <?php
            $pdo = new dbConnect();
            $id = $_GET['id'];
            $measure = $pdo->checkFinal($id);
            if(!empty($measure)){
              echo "";
            }else{
              echo '<button id="final" name ="submit" type="submit" data-toggle="modal" data-target="#finalMeasurement" class="btn bg-light-green pull-right" style="margin-left:20px; margin-top:18px;">Final Body Measurements</button>';
            }
            ?>


            <?php
            $pdo = new dbConnect();
            $id = $_GET['id'];
            $measure = $pdo->checkMeasurement($id);
            if(!empty($measure)){
              echo "";
            }else{
              echo '<button id="initial" name ="submit" type="submit" data-toggle="modal" data-target="#initialMeasurement" class="btn bg-light-green pull-right" style="margin-top:18px; ">Initial Body Measurements</button>';
            }
            ?>

          </div>
        </div>
      </div>


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
    <!-- End of health conditions -->



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




    <div class="modal fade" id="exercises" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <center>
            <div class="modal-body">
              <div class="card">
                <div class="header">
                  <h2>Suggested Exercises</h2>
                </div>
                <div class="body">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 1</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/1.gif" alt="exercise1" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 2</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/2.gif" alt="exercise2" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 3</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/3.gif" alt="exercise3" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 4</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/4.gif" alt="exercise4" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 5</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/5.gif" alt="exercise5" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 6</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/6.gif" alt="exercise6" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 7</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/7.gif" alt="exercise7" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 8</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/8.gif" alt="exercise8" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card">
                        <div class="header bg-green">
                          <h2>Exercise 9</h2>
                        </div>
                        <div class="body">
                          <img src="exercises/9.gif" alt="exercise9" style="height:100%; width:100%">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">

              <button type="button" class="btn  bg-red" data-dismiss="modal">CLOSE</button>
            </div>
          </div>

        </div>
      </div>




      <div class="card">
        <div class="header" style="background:silver;">
          <h2>Personal Training Session</h2>
          <button type="button" data-toggle="modal" data-target="#exercises" class="btn bg-green pull-right btn-success" style="margin-top:-22px">SUGGESTED EXERCISES </button>
        </div>
        <form method="post" action="actions/trainingSessionAction.php">
          <div class="body">
            <div class="row clearfix">
              <div class="col-md-4">
                <div class="input-group">
                  <div class="form-line">
                    <h5 class="pull-left">Session Date</h5>
                    <input type="date" name="date" class="form-control"/>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group">
                  <div class="form-line">
                    <h5 class="pull-left">Start Time</h5>
                    <input type="time" name="st" class="form-control" placeholder="Start Time" min="07:00" max="22:00"/>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
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
                        <label for="age">Weight(kg)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="weight" min="0" class="form-control" value="<?php echo $measurement['M_Weight']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Height(m)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="height" min="0" class="form-control" value="<?php echo $measurement['M_Height']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Skeletal Mass(kg)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="skeletalMass" min="0" class="form-control" value="<?php echo $measurement['M_SkeletalMass']?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Body Fat Mass(%)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="bodyFatMass" min="0" class="form-control" value="<?php echo $measurement['M_BodyFatMass']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Fat Free Mass(%)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="fatFreeMass" min="0" class="form-control" value="<?php echo $measurement['M_FatFreeMass']?>" >
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-md-3">
                        <label for="age">Body Mass Index(%)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="bodyMassIndex" min="0" class="form-control"  value="<?php echo $measurement['M_BodyMassIndex']?>">
                          </div>
                        </div>
                      </div> -->
                      <div class="col-md-3">
                        <label for="age">Percent Body Fat(%)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="percentBodyFat" min="0" class="form-control" value="<?php echo $measurement['M_PercentBodyFat']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Waist-Hip Ratio(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="waistHipRatio" min="0" class="form-control"  value="<?php echo $measurement['M_WaistHipRatio']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Basal-Metabolism(J/(h. kg)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="basalMetabolism" min="0" class="form-control" value="<?php echo $measurement['M_BasalMetabolicRate']?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row clearfix">

                      <div class="col-md-3">
                        <label for="age">Left Upper Arm(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="leftUpperArm" min="0" class="form-control"  value="<?php echo $measurement['M_LeftUpperArm']?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Right Upper Arm(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="rightUpperArm" min="0" class="form-control" value="<?php echo $measurement['M_RightUpperArm']?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Chest(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="chest" min="0" class="form-control" value="<?php echo $measurement['M_Chest']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Waist(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="waist" min="0" class="form-control"  value="<?php echo $measurement['M_Waist']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Hip(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="hip" min="0" class="form-control" value="<?php echo $measurement['M_Hips']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Left Upper Thigh(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="leftUpperThigh" min="0" class="form-control" value="<?php echo $measurement['M_LeftUpperThigh']?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Right Upper Thigh(cm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="rightUpperThigh" min="0" class="form-control" value="<?php echo $measurement['M_RightUpperThigh']?>" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="age">Resting Heart Rate(bpm)</label>
                        <div class="form-group">
                          <div class="form-line">
                            <input type="text" name="restingHeartRate" min="0" class="form-control" value="<?php echo $measurement['M_RestingHR']?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                        <input type="hidden" name="CLIENT_ID" value="<?php echo $pt['CLIENT_ID']?>">
                        <input type="hidden" name="M_Code" value="<?php echo $measurement['M_Code']?>">
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
                          <label for="age">Weight(kg)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="weight" min="0" class="form-control" value="<?php echo $measurement['M_Weight']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Height(m)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="height" min="0" class="form-control" value="<?php echo $measurement['M_Height']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Skeletal Mass(kg)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="skeletalMass" min="0" class="form-control" value="<?php echo $measurement['M_SkeletalMass']?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Body Fat Mass(%)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="bodyFatMass" min="0" class="form-control" value="<?php echo $measurement['M_BodyFatMass']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Fat Free Mass(%)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="fatFreeMass" min="0" class="form-control" value="<?php echo $measurement['M_FatFreeMass']?>" >
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-md-3">
                          <label for="age">Body Mass Index(%)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="bodyMassIndex" min="0" class="form-control"  value="<?php echo $measurement['M_BodyMassIndex']?>">
                            </div>
                          </div>
                        </div> -->
                        <div class="col-md-3">
                          <label for="age">Percent Body Fat(%)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="percentBodyFat" min="0" class="form-control" value="<?php echo $measurement['M_PercentBodyFat']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Waist-Hip Ratio(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="waistHipRatio" min="0" class="form-control"  value="<?php echo $measurement['M_WaistHipRatio']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Basal-Metabolism(J/(h. kg)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="basalMetabolism" min="0" class="form-control" value="<?php echo $measurement['M_BasalMetabolicRate']?>">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row clearfix">

                        <div class="col-md-3">
                          <label for="age">Left Upper Arm(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="leftUpperArm" min="0" class="form-control"  value="<?php echo $measurement['M_LeftUpperArm']?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Right Upper Arm(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="rightUpperArm" min="0" class="form-control" value="<?php echo $measurement['M_RightUpperArm']?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Chest(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="chest" min="0" class="form-control" value="<?php echo $measurement['M_Chest']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Waist(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="waist" min="0" class="form-control"  value="<?php echo $measurement['M_Waist']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Hip(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="hip" min="0" class="form-control" value="<?php echo $measurement['M_Hips']?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Left Upper Thigh(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="leftUpperThigh" min="0" class="form-control" value="<?php echo $measurement['M_LeftUpperThigh']?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Right Upper Thigh(cm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="rightUpperThigh" min="0" class="form-control" value="<?php echo $measurement['M_RightUpperThigh']?>" >
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="age">Resting Heart Rate(bpm)</label>
                          <div class="form-group">
                            <div class="form-line">
                              <input type="text" name="restingHeartRate" min="0" class="form-control" value="<?php echo $measurement['M_RestingHR']?>">
                            </div>
                          </div>
                        </div>
                        <input type="hidden" name="TL_Code" value="<?php echo $pt['TL_Code']?>">
                        <input type="hidden" name="CLIENT_ID" value="<?php echo $pt['CLIENT_ID']?>">
                        <input type="hidden" name="M_Code" value="<?php echo $measurement['M_Code']?>">
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
            $initialMeasurements = $pdo->measurementInitial($id,array('order_by'=>'M_Code ASC'));
            if(!empty($initialMeasurements)){
              $count = 0;
              foreach($initialMeasurements as $initialMeasurement){
                $count++;
                ?>
                <?php
                $id = $_GET['id'];
                $pdo = new dbConnect();
                $finalMeasurements = $pdo->measurementFinal($id,array('order_by'=>'M_Code ASC'));
                if(!empty($finalMeasurements)){
                  $count = 0;
                  foreach($finalMeasurements as $finalMeasurement){
                    $count++;
                    ?>


                    var data = {
                      "weight": [

                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_Weight'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_Weight'] ?> }

                      ],
                      "skeletalMass": [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_SkeletalMass'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_SkeletalMass'] ?> }
                      ],
                      "bodyFatMass" : [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_BodyFatMass'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_BodyFatMass'] ?> }
                      ],
                      "fatFreeMass" : [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_FatFreeMass'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_FatFreeMass'] ?> }
                      ],
                      "bodyMassIndex": [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_BodyMassIndex'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_BodyMassIndex'] ?> }
                      ],
                      "percentBodyFat": [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_PercentBodyFat'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_PercentBodyFat'] ?> }
                      ],
                      "waistHipRatio": [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_WaistHipRatio'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_WaistHipRatio'] ?> }
                      ],
                      "basalMetabolicRate": [
                        {label: "Initial Measurement", y: <?php echo $initialMeasurement['M_BasalMetabolicRate'] ?> },
                        {label: "Final Measurement",y: <?php echo $finalMeasurement['M_BasalMetabolicRate'] ?> }
                      ],
                    }
                    var dataPoints = [];
                    var bmi = new CanvasJS.Chart("bmi", {
                      title:{
                        text: "Body Mass Index Difference"
                      },
                      axisY:{
                        valueFormatString: "###.##"
                      },

                      data: [  //array of dataSeries
                        { //dataSeries - first quarter
                          /*** Change type "column" to "bar", "area", "line" or "pie"***/
                          type: "bar",

                          dataPoints: dataPoints

                        }]
                      }); //dataSeries - second quarter

                      $( "#select" ).change(function() {
                        bmi.options.data[0].dataPoints = [];
                        var e = document.getElementById("select");
                        var selected = e.options[e.selectedIndex].value;
                        dps = data[selected];
                        for(var i in dps) {

                          bmi.options.data[0].dataPoints.push({label: dps[i].label, y: dps[i].y});
                        }
                        bmi.render();
                      });


                      <?php }}?>
                      <?php }} ?>
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


                              bmd.render();
                            }
                            </script>

                            <?php
                            $id = $_GET['id'];
                            $pdo = new dbConnect();
                            $IClasses = $pdo->measurementClassInitial($id,array('order_by' => 'M_Code ASC'));
                            if(!empty($IClasses)){
                              $count = 0;
                              foreach($IClasses as $IClass){
                                $count++;
                                ?>

                                <?php
                                $id = $_GET['id'];
                                $pdo = new dbConnect();
                                $Fclasses = $pdo->measurementClassFinal($id,array('order_by' => 'M_Code ASC'));
                                if(!empty($Fclasses)){
                                  $count = 0;
                                  foreach($Fclasses as $Fclass){
                                    $count++;
                                    ?>

                                    <div class="card">
                                      <div class="header">
                                        <h2>Body Mass Index Measurement Difference</h2>

                                      </div>
                                      <div class="body">

                                        <div class="col-md-3">
                                          <select class="form-control show-tick" id="select" name="measurements">
                                            <option value=" " selected="selected">-Choose Measurement-</option>
                                            <option value="weight" >Weight</option>
                                            <option value="skeletalMass">Skeletal Mass</option>
                                            <option value="bodyFatMass">Body Fat Mass</option>
                                            <option value="fatFreeMass">Fat Free Mass</option>
                                            <option value="bodyMassIndex">Body Mass Index</option>
                                            <option value="percentBodyFat">Percent Body Fat</option>
                                            <option value="waistHipRatio">Waist Hip Ratio</option>
                                            <option value="basalMetabolicRate">Basal Metabolic Rate</option>

                                          </select>
                                        </div>
                                        <div class="col-md-12">
                                          <div id="bmi" style="width: 100%; height: 400px"></div>
                                        </div>
                                        <br>

                                        <div class="container-fluid">
                                          <table class="table table-bordered table-striped table-hover  dataTable" id="DataTables_Table_0">
                                            <thead>

                                              <tr>
                                                <th><center>Underweight</center></th>
                                                <th><center>Normal Weight</center></th>
                                                <th><center>Overweight</center></th>
                                                <th><center>Class I obesity</center></th>
                                                <th><center>Class II obesity</center></th>
                                                <th><center>Class III obesity</center></th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <td><center>18.5(Kg)</center></td>
                                              <td><center>18.5–24.9(Kg)</center></td>
                                              <td><center>25.0–29.9(Kg)</center></td>
                                              <td><center>30.0–34.9(Kg)</center></td>
                                              <td><center>35.0–39.9(Kg)</center></td>
                                              <td><center>≥ 40.0(Kg)</center></td>
                                            </tbody>

                                          </table>
                                        </div>



                                        <h4 id="initial">Initial Body Mass Index Measurement: <?php echo $IClass['M_BodyMassIndex']?> kg/m2 -
                                          <span class="label
                                            <?php
                                              if($IClass['M_Classification'] == "Underweight"){
                                                echo "bg-red";
                                              }elseif($IClass['M_Classification'] == "Normal Weight"){
                                                echo "bg-green";
                                              }elseif($IClass['M_Classification'] == "Overweight"){
                                                echo "bg-yellow";
                                              }elseif($IClass['M_Classification'] == "Class I Obesity"){
                                                echo "bg-orange";
                                              }elseif($IClass['M_Classification'] == "Class II Obesity"){
                                                echo "bg-amber";
                                              }elseif($IClass['M_Classification'] == "Class III Obesity"){
                                                echo "bg-red";
                                              }

                                            ?>"><?php echo $IClass['M_Classification']?></span></h4>


                                        <h4 id="final">Final BMI Classification: <?php echo $Fclass['M_BodyMassIndex']?> kg/m2 -
                                          <span class="label
                                          <?php
                                            if($IClass['M_Classification'] == "Underweight"){
                                              echo "bg-red";
                                            }elseif($Fclass['M_Classification'] == "Normal Weight"){
                                              echo "bg-green";
                                            }elseif($Fclass['M_Classification'] == "Overweight"){
                                              echo "bg-yellow";
                                            }elseif($Fclass['M_Classification'] == "Class I Obesity"){
                                              echo "bg-orange";
                                            }elseif($Fclass['M_Classification'] == "Class II Obesity"){
                                              echo "bg-amber";
                                            }elseif($Fclass['M_Classification'] == "Class III Obesity"){
                                              echo "bg-red";
                                            }

                                          ?>"><?php echo $Fclass['M_Classification']?></span></h4>







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
                                  <?php }}?>
                                <?php }}?>





                                <!-- END OF CLIENT PROFILE MEMBERSHIP DETAILS -->

                                <!-- START OF CLIENT ACTIVITY LOG -->




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
                                                            <input type="number" name="weight" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Height(m)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="text" name="height" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Skeletal Mass(kg)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="skeletalMass" min="0" class="form-control"  required >
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Body Fat Mass(%)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="bodyFatMass" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Fat Free Mass(%)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="fatFreeMass" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <!-- <div class="col-md-3">
                                                        <label for="age">Body Mass Index(kg)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="bodyMassIndex" min="0" class="form-control" required >
                                                          </div>
                                                        </div>
                                                      </div> -->
                                                      <div class="col-md-3">
                                                        <label for="age">Percent Body Fat(%)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="percentBodyFat" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Waist-Hip Ratio(cm)</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="waistHipRatio" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Basal-Metabolism</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="basalMetabolism" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row clearfix">

                                                      <div class="col-md-3">
                                                        <label for="age">Left Upper Arm</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="leftUpperArm" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Right Upper Arm</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="rightUpperArm" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Chest</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="chest" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Waist</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="waist" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Hip</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="hip" min="0" class="form-control" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Left Upper Thigh</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="leftUpperThigh" min="0" class="form-control" required >
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Right Upper Thigh</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="rightUpperThigh" min="0" class="form-control"  required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label for="age">Resting Heart Rate</label>
                                                        <div class="form-group">
                                                          <div class="form-line">
                                                            <input type="number" name="restingHeartRate" min="0" class="form-control"  required>
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
                                              <button  name="InitialSubmit" type="submit" class="btn  bg-green">SUBMIT</button>

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

                                                  <form method="post" id="FinalMeasurement" action="actions/measurementAction.php" >

                                                    <div class="body">
                                                      <div class="row clearfix">
                                                        <div class="col-md-3">
                                                          <label for="age">Weight(kg)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="weight" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Height(m)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="text" name="height" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Skeletal Mass(kg)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="skeletalMass" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- <div class="col-md-3">
                                                          <label for="age">Body Fat Mass(%)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="bodyFatMass" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div> -->
                                                        <div class="col-md-3">
                                                          <label for="age">Fat Free Mass(%)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="fatFreeMass" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Body Mass Index(kg)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="bodyMassIndex" min="0" class="form-control" required >
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Percent Body Fat(%)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="percentBodyFat" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Waist-Hip Ratio(cm)</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="waistHipRatio" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Basal-Metabolism</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="basalMetabolism" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row clearfix">

                                                        <div class="col-md-3">
                                                          <label for="age">Left Upper Arm</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="leftUpperArm" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Right Upper Arm</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="rightUpperArm" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Chest</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="chest" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Waist</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="waist" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Hip</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="hip" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Left Upper Thigh</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="leftUpperThigh" min="0" class="form-control"  required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Right Upper Thigh</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="rightUpperThigh" min="0" class="form-control" required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label for="age">Resting Heart Rate</label>
                                                          <div class="form-group">
                                                            <div class="form-line">
                                                              <input type="number" name="restingHeartRate" min="0" class="form-control" required>
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
                                                <button onsubmit="removeFinal();" name="submit" id="btnFinal"  type="submit" class="btn  bg-green">SUBMIT</button>

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
                                <script type="text/javascript">

                                function showTime(){
                                  var date = new Date();
                                  var h = date.getHours();
                                  var m = date.getMinutes();
                                  var s = date.getSeconds();
                                  var day = date.getDate();
                                  var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                                  var session = "AM";

                                  if(h == 0){
                                    h = 12;
                                  }
                                  if(h > 12){
                                    h = h - 12;
                                    session = "PM";
                                  }

                                  h = (h < 10) ? "0" + h : h;
                                  m = (m < 10) ? "0" + m : m;
                                  s = (s < 10) ? "0" + s : s;

                                  //date
                                  var date = new Date();
                                  var mon = date.getMonth();
                                  var day = date.getDate();
                                  var yr = date.getFullYear();
                                  var monthNames = ["January", "February", "March", "April", "May", "June",
                                  "July", "August", "September", "October", "November", "December" ];
                                  var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];


                                  var time = h + ":" + m + ":" + s + " " + session+ "  -  "+ monthNames[date.getMonth()] + " "+day+ ","+yr + "(" + days[date.getDay()] + ")";
                                  document.getElementById("clock").innerHTML = time;




                                  setTimeout(showTime, 1000);
                                }
                                showTime();
                                </script>
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
