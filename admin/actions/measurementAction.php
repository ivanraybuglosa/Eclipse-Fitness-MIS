<?php
session_start();
include('../../dbConnect.php'); ;
$db = new dbConnect();

$tblName = 'measurements';
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $weight = $_POST['weight'];
        if($weight < 18.5){
            $class = "Underweight";
        }else if($weight > 18.4 && $weight < 25){
            $class = "Normal Weight";
        }else if($weight > 24.9 && $weight < 30){
            $class = "Overweight";
        }else if($weight > 29.9 && $weight < 35){
            $class = "Class I Obesity";
        }else if($weight > 34.9 && $weight < 40){
            $class = "Class II Obesity";
        }else if($weight > 40){
            $class = "Class III Obesity";
        }else{
            $class ="Undefined";
        }
    

        $userData = array(
            'M_Weight' => $_POST['weight'],
            'M_SkeletalMass' => $_POST['skeletalMass'],
            'M_BodyFatMass' => $_POST['bodyFatMass'],
            'M_FatFreeMass' => $_POST['fatFreeMass'],
            'M_BodyMassIndex' => $_POST['bodyMassIndex'],
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
            'M_Classification' => $class
        );
        $insert = $db->insert($tblName,$userData);
        $id = $_POST['TL_Code'];
        $client = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Measurement Successfully Saved!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";
        $statusMsg = $insert?'Client Body Measurement data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
    }elseif($_REQUEST['action_type'] == 'modifyInitial'){
        $userData = array(
            'M_Weight' => $_POST['weight'],
            'M_SkeletalMass' => $_POST['skeletalMass'],
            'M_BodyFatMass' => $_POST['bodyFatMass'],
            'M_FatFreeMass' => $_POST['fatFreeMass'],
            'M_BodyMassIndex' => $_POST['bodyMassIndex'],
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
            'M_MeasurementType' =>  $_POST['type']
        );

         $condition1 = array('TL_Code' => $_POST['TL_Code']);
            $update = $db->update($tblName,$userData,$condition1);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $id = $_POST['TL_Code'];
            $client = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Initial Measurement Successfully Modified!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";
        $statusMsg = $insert?'Client Body Measurement data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
    }elseif($_REQUEST['action_type'] == 'modifyFinal'){
        $userData = array(
            'M_Weight' => $_POST['weight'],
            'M_SkeletalMass' => $_POST['skeletalMass'],
            'M_BodyFatMass' => $_POST['bodyFatMass'],
            'M_FatFreeMass' => $_POST['fatFreeMass'],
            'M_BodyMassIndex' => $_POST['bodyMassIndex'],
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
            'M_MeasurementType' =>  $_POST['type']
        );

            $condition1 = array('TL_Code' => $_POST['TL_Code'],
            'M_MeasurementType' =>  $_POST['type']);
            $update = $db->update($tblName,$userData,$condition1);
            $id = $_POST['TL_Code'];
        $client = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Final Measurement Successfully Saved!');window.location.href='../PT-ContractsInfo.php?id=".$id."&amp;client=$client ';</script>";
        $statusMsg = $insert?'Client Body Measurement data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
    }
}