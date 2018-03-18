<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'traininglog';

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);
$checkBox = implode(',', $_POST['health']);
$client = $_POST['CLIENT_ID'];

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'healthcondition'){
        $userData = array(
            'TL_HealthConditions' => $checkBox,
            'TL_ClientPerformance' => $_POST['performance']
            
        );
        $condition1 = array('TL_Code' => $_POST['TL_Code']);
        $update = $pdo->update($tblName,$userData,$condition1);

        $first = $pdo->getClientFirst($client);
        $desc = ' '.$first.'\'s  health condition added';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Personal Training Health Condition',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);


        $id = $_POST['TL_Code'];
            echo "<script>alert('Client Health Condition Succesfully saved!');window.location.href='../PT-ContractsInfo.php?id=".$id."';</script>";
    }
            
        
    
}