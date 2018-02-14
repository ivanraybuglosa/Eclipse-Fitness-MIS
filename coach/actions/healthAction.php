<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'traininglog';
$checkBox = implode(',', $_POST['health']);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'healthcondition'){
        $userData = array(
            'TL_HealthConditions' => $checkBox,
            'TL_ClientPerformance' => $_POST['performance']
            
        );
        $condition1 = array('TL_Code' => $_POST['TL_Code']);
        $update = $pdo->update($tblName,$userData,$condition1);
        $id = $_POST['TL_Code'];
            echo "<script>alert('Client Health Condition Succesfully saved!');window.location.href='../PT-ContractsInfo.php?id=".$id."';</script>";
    }
            
        
    
}