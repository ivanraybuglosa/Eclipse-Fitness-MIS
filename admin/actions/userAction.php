<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'users';

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $username = $_POST['username'];
        $userData = array(
            'username' => $username,
            'password' => md5($_POST['password']),
            'userType' => $_POST['usertype']
            
        );
        $insert = $pdo->insert($tblName,$userData);
        
        $desc = ''.$username.' has been added as a new user';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'User Registration',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);

        echo "<script>alert('User information saved!');window.location.href='../Maintenance-Users.php';</script>";
    
            
        
    
}elseif($_REQUEST['action_type'] == 'edit'){
        $username = $_POST['editUsername'];
        $userData2 = array(
            'username' => $username,
            
            'password' => md5($_POST['editPassword'])
            
            
        );
        $condition = array('userID' => $_POST['userID']);
        $update = $pdo->update($tblName,$userData2,$condition);

        $desc = ''.$username.' user information has been modified';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'User Modification',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);
       
            echo "<script>alert('User information modified!');window.location.href='../Maintenance-Users.php';</script>";
}}