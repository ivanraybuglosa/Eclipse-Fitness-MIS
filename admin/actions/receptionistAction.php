<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'receptionist';
$tblName2 = 'users';
$id = "userID";
$username = $_POST['rusername'];

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
       
        $userData2 = array(
            'username' => $_POST['rusername'],
            'password' => md5($_POST['rpassword']),
            'userType' => "receptionist"            
        );

        $insert2 = $pdo->insert($tblName2,$userData2);
         $returnedVal = $pdo->selectID($id,$tblName2,$username);
        $userData = array(
             
            'Rec_lastName' => $_POST['rlname'],
            'Rec_firstName' => $_POST['rfname'],
            'Rec_contact' => $_POST['rcontact'],
            'Rec_emailAdd' => $_POST['remailAddress'],
            'Rec_gender' => $_POST['rgender'],
            'userID' => $returnedVal
        );
        $insert = $pdo->insert($tblName,$userData);
        header("Location:../Maintenance-Receptionists.php");
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'Rec_lastName' => $_POST['rlname'],
            'Rec_firstName' => $_POST['rfname'],
            'Rec_contact' => $_POST['rcontact'],
            'Rec_emailAdd' => $_POST['remailAddress'],
            'Rec_gender' => $_POST['rgendermod']

            );
            $userData2 = array(
            'username' => $_POST['rusername'],
            'password' => md5($_POST['rpassword']),
            
            );
            $condition1 = array('userID' => $_POST['user_id']);
            $update1 = $pdo->update($tblName,$userData,$condition1);
            $update2 = $pdo->update($tblName2,$userData2,$condition1);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../Maintenance-Receptionists.php");
        
    }
}