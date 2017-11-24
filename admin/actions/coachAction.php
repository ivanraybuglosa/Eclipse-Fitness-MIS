<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'coach';
$tblName2 = 'users';
$id = "userID";
$username = $_POST['username'];

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
       
        $userData2 = array(
            'username' => $_POST['cusername'],
            'password' => md5($_POST['cpassword']),
            'userType' => "coach"            
        );

        $insert2 = $pdo->insert($tblName2,$userData2);
         $returnedVal = $pdo->selectID($id,$tblName2,$username);
        $userData = array(
             
            'Coach_LastName' => $_POST['LastName'],
            'Coach_FirstName' => $_POST['FirstName'],
            'Coach_Gender' => $_POST['gender'],
            'Coach_ContactNumber' => $_POST['ContactNumber'],
            'Coach_EmailAddress' => $_POST['EmailAddress'],
            'Coach_Specialty' => $_POST['Specialty'],
            'Coach_Type' => $_POST['Type'],
            'userID' => $returnedVal
        );
        $insert = $pdo->insert($tblName,$userData);
        header("Location:../PT-Coaches.php");
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'Coach_LastName' => $_POST['Coach_LastName'],
            'Coach_FirstName' => $_POST['Coach_FirstName'],
            'Coach_Gender' => $_POST['Coach_Gender'],
            'Coach_ContactNumber' => $_POST['Coach_ContactNumber'],
            'Coach_EmailAddress' => $_POST['Coach_EmailAddress'],
            'Coach_Specialty' => $_POST['Coach_Specialty'],
            'Coach_Type' => $_POST['Coach_Type'],
            );
            $userData2 = array(
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
            
            );
            $condition1 = array('userID' => $_POST['user_id']);
            $update1 = $pdo->update($tblName,$userData,$condition1);
            $update2 = $pdo->update($tblName2,$userData2,$condition1);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../Maintenance-Receptionists.php");
        
    }
}