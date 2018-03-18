<?php
session_start();
include('../../dbConnect.php'); ;
$pdo = new dbConnect();
date_default_timezone_set("Asia/Manila");
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));

$tblName = 'measurements';
$weight = $_POST['weight'];
$height = $_POST['height'];
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$first = $pdo->getClientFirst($_POST['CLIENT_ID']);
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $bmi = $weight/pow($height,2);
        if($bmi < 18.5){
            $class = "Underweight";
        }else if($bmi > 18.4 && $bmi < 25){
            $class = "Normal Weight";
        }else if($bmi > 24.9 && $bmi < 30){
            $class = "Overweight";
        }else if($bmi > 29.9 && $bmi < 35){
            $class = "Class I obesity";
        }else if($bmi > 34.9 && $bmi < 40){
            $class = "Class II obesity";
        }else if($bmi > 39){
            $class = "Class III obesity";
        }else{
            $class ="Undefined";
        }


        $userData = array(
            'M_Weight' => $weight,
            'M_Height' => $height,
            'M_SkeletalMass' => $_POST['skeletalMass'],
            'M_BodyFatMass' => $_POST['bodyFatMass'],
            'M_FatFreeMass' => $_POST['fatFreeMass'],
            'M_BodyMassIndex' => $weight/pow($height,2),
            'M_PercentBodyFat' => $_POST['percentBodyFat'],
            'M_WaistHipRatio' => $_POST['waistHipRatio'],
            'M_BasalMetabolicRate' => $_POST['basalMetabolism'],
            'M_LeftUpperArm' => $_POST['leftUpperArm'],
            'M_RightUpperArm' => $_POST['rightUpperArm'],
            'M_Chest' => $_POST['chest'],
            'M_Waist' => $_POST['waist'],
            'M_Hips' => $_POST['hip'],
            'M_LeftUpperThigh' => $_POST['leftUpperThigh'],
            'M_RightUpperThigh' => $_POST['rightUpperThigh'],
            'M_RestingHR' => $_POST['restingHeartRate'],
            'TL_Code' => $_POST['TL_Code'],
            'M_DateMeasured' =>  $_POST['date'],
            'M_MeasurementType' =>  $_POST['type'],
            'M_Classification' => $class,
            'month' => $month,
            'year' => $year
        );
        $checkInitial = $pdo->checkInitial($_POST['TL_Code']);
        if($checkInitial <> $_POST['TL_Code'] || empty($checkInitial)){
            $insert = $pdo->insert($tblName,$userData);

            $desc = ' '.$first.'\'s has been measured';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Personal Training Measurement ',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);

            $id = $_POST['TL_Code'];
            $client = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Measurement Successfully Saved!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";
        }else{
            $id = $_POST['TL_Code'];
            $client = $_POST['CLIENT_ID'];
            echo "<script>alert('Client Measurement cannot be measured more than once!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";
        }


    }elseif($_REQUEST['action_type'] == 'modifyInitial'){
      $bmi = $weight/pow($height,2);
      if($bmi < 18.5){
          $class = "Underweight";
      }else if($bmi > 18.4 && $bmi < 25){
          $class = "Normal Weight";
      }else if($bmi > 24.9 && $bmi < 30){
          $class = "Overweight";
      }else if($bmi > 29.9 && $bmi < 35){
          $class = "Class I obesity";
      }else if($bmi > 34.9 && $bmi < 40){
          $class = "Class II obesity";
      }else if($bmi > 39){
          $class = "Class III obesity";
      }else{
          $class ="Undefined";
      }
        $userData = array(
            'M_Weight' => $weight,
            'M_Height' => $height,
            'M_SkeletalMass' => $_POST['skeletalMass'],
            'M_BodyFatMass' => $_POST['bodyFatMass'],
            'M_FatFreeMass' => $_POST['fatFreeMass'],
            'M_BodyMassIndex' => $bmi,
            'M_PercentBodyFat' => $_POST['percentBodyFat'],
            'M_WaistHipRatio' => $_POST['waistHipRatio'],
            'M_BasalMetabolicRate' => $_POST['basalMetabolism'],
            'M_LeftUpperArm' => $_POST['leftUpperArm'],
            'M_RightUpperArm' => $_POST['rightUpperArm'],
            'M_Chest' => $_POST['chest'],
            'M_Waist' => $_POST['waist'],
            'M_Hips' => $_POST['hip'],
            'M_LeftUpperThigh' => $_POST['leftUpperThigh'],
            'M_RightUpperThigh' => $_POST['rightUpperThigh'],
            'M_RestingHR' => $_POST['restingHeartRate'],
            'TL_Code' => $_POST['TL_Code'],
            'M_MeasurementType' =>  $_POST['type'],
            'M_Classification' => $class
        );

         $condition1 = array('M_Code' => $_POST['M_Code']);
            $update = $pdo->update($tblName,$userData,$condition1);

            $desc = ' '.$first.'\'s measurements has been modified ';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Personal Training Initial Measurement Modification ',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);
            $id = $_POST['TL_Code'];
            $client = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Initial Measurement Successfully Modified!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";
    }elseif($_REQUEST['action_type'] == 'modifyFinal'){


      $bmi = $weight/pow($height,2);
      if($bmi < 18.5){
          $class = "Underweight";
      }else if($bmi > 18.4 && $bmi < 25){
          $class = "Normal Weight";
      }else if($bmi > 24.9 && $bmi < 30){
          $class = "Overweight";
      }else if($bmi > 29.9 && $bmi < 35){
          $class = "Class I obesity";
      }else if($bmi > 34.9 && $bmi < 40){
          $class = "Class II obesity";
      }else if($bmi > 39){
          $class = "Class III obesity";
      }else{
          $class ="Undefined";
      }

        $userData = array(
            'M_Weight' => $weight,
            'M_Height' => $height,
            'M_SkeletalMass' => $_POST['skeletalMass'],
            'M_BodyFatMass' => $_POST['bodyFatMass'],
            'M_FatFreeMass' => $_POST['fatFreeMass'],
            'M_BodyMassIndex' => $bmi,
            'M_PercentBodyFat' => $_POST['percentBodyFat'],
            'M_WaistHipRatio' => $_POST['waistHipRatio'],
            'M_BasalMetabolicRate' => $_POST['basalMetabolism'],
            'M_LeftUpperArm' => $_POST['leftUpperArm'],
            'M_RightUpperArm' => $_POST['rightUpperArm'],
            'M_Chest' => $_POST['chest'],
            'M_Waist' => $_POST['waist'],
            'M_Hips' => $_POST['hip'],
            'M_LeftUpperThigh' => $_POST['leftUpperThigh'],
            'M_RightUpperThigh' => $_POST['rightUpperThigh'],
            'M_RestingHR' => $_POST['restingHeartRate'],
            'TL_Code' => $_POST['TL_Code'],
            'M_MeasurementType' =>  $_POST['type'],
            'M_Classification' => $class
        );

            $condition1 = array('M_Code' => $_POST['M_Code']);
            $update = $pdo->update($tblName,$userData,$condition1);
            
            $desc = ' '.$first.'\'s measurements has been modified ';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Personal Training Final Measurement Modification ',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);
            
            $id = $_POST['TL_Code'];
            $client = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Final Measurement Successfully Saved!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";

    }
}
