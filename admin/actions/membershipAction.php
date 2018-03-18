<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'membership';

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $mem = $_POST['type'];
        $userData = array(
            
            'MS_Type' => $mem,
            'MS_Duration' => $_POST['duration'],
            'MS_Price' => $_POST['price']
        );
        $insert = $pdo->insert($tblName,$userData);

        $desc = ' '.$mem.' has been added as a membership option ' ;
        $log = array (
            'userID' => $userid,
            'log_activity' => 'Membership Information Registration',
            'log_description' => $desc,
            'log_date' => $date,
            'log_time' => $time
        );  
        $insert = $pdo->insert('log',$log);

        echo "<script>alert('Membership Information Successfully saved!');window.location.href='../Maintenance-MembershipOptions.php';</script>";
            
    }elseif($_REQUEST['action_type'] == 'edit'){
            $mem = $_POST['type'];
            $userData = array(
            'MS_Type' => $mem,
            'MS_Duration' => $_POST['duration'],
            'MS_Price' => $_POST['price']
            );
            $condition = array('MS_Code' => $_POST['MS_Code']);
            $update = $pdo->update($tblName,$userData,$condition);

            $desc = ' '.$mem.' membership option information has been modified ' ;
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Membership Information Modification',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);

            echo "<script>alert('Membership Information Successfully modified!');window.location.href='../Maintenance-MembershipOptions.php';</script>";
         
        }
}