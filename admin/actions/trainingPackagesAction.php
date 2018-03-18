<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'trainingpackage';


$user = $_SESSION['username'];
$pass = $_SESSION['password'];
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
        
            'TP_PackageType' => $_POST['packageType'],
            'TP_CoachType' => $_POST['coachType'],
            'TP_Price' => $_POST['price'],
            'TP_Validity' => $_POST['validity']
        );
        $insert = $pdo->insert($tblName,$userData);

        $desc = 'A new training package has been added';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Training Package Registration',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);

        echo "<script>alert('Training Package Information Successfully Saved!');window.location.href='../Maintenance-TrainingPackage.php';</script>";
        
        
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'TP_Code' => $_POST['tpCode'],
            'TP_PackageType' => $_POST['packageType'],
            'TP_CoachType' => $_POST['coachType'],
            'TP_Price' => $_POST['price'],
            'TP_Validity' => $_POST['validity']
            );
            $condition = array('TP_Code' => $_POST['tpCode']);
            $update = $pdo->update($tblName,$userData,$condition);
            $desc = 'A training package has been modified';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Training Package Modification',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);

            echo "<script>alert('Training Package Information Successfully Modified!');window.location.href='../Maintenance-TrainingPackage.php';</script>";
         
        
    }
}
