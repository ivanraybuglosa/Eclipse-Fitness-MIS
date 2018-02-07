<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'membership';

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
		
            'MS_Type' => $_POST['type'],
            'MS_Duration' => $_POST['duration'],
            'MS_Price' => $_POST['price']
        );
        $insert = $pdo->insert($tblName,$userData);
        echo "<script>alert('Membership Information Successfully saved!');window.location.href='../Maintenance-MembershipOptions.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;    
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'MS_Type' => $_POST['type'],
            'MS_Duration' => $_POST['duration'],
            'MS_Price' => $_POST['price']
            );
            $condition = array('MS_Code' => $_POST['MS_Code']);
            $update = $pdo->update($tblName,$userData,$condition);
             echo "<script>alert('Membership Information Successfully modified!');window.location.href='../Maintenance-MembershipOptions.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;   
        }
}