<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'users';

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
            'userType' => $_POST['usertype']
            
        );
        $insert = $pdo->insert($tblName,$userData);
       
            echo "<script>alert('User information saved!');window.location.href='../Maintenance-Users.php';</script>";
    
            
        
    
}elseif($_REQUEST['action_type'] == 'edit'){
  
        $userData2 = array(
            'username' => $_POST['editUsername'],
            
            'password' => md5($_POST['editPassword'])
            
            
        );
        $condition = array('userID' => $_POST['userID']);
        $update = $pdo->update($tblName,$userData2,$condition);
       
            echo "<script>alert('User information modified!');window.location.href='../Maintenance-Users.php';</script>";
}}