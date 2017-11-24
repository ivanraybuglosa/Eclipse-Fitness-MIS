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
        $statusMsg = $insert?'Membership Options data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../Maintenance-MembershipOptions.php");
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'MS_Type' => $_POST['type'],
            'MS_Duration' => $_POST['duration'],
            'MS_Price' => $_POST['price']
            );
            $condition = array('MS_Code' => $_POST['mCode']);
            $update = $db->update($tblName,$userData,$condition);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../Maintenance-MembershipOptions.php");
        }
}