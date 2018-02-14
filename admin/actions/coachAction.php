<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'coach';
$tblName2 = 'users';
$id = "userID";


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
       $username = $_POST['cusername'];
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
         echo "<script>alert('Coach Information Successfully Saved!');window.location.href='../PT-Coaches.php';</script>";
         
    
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'Coach_LastName' => $_POST['LastName'],
            'Coach_FirstName' => $_POST['FirstName'],
            'Coach_Gender' => $_POST['gendermod'],
            'Coach_ContactNumber' => $_POST['ContactNumber'],
            'Coach_EmailAddress' => $_POST['EmailAddress'],
            'Coach_Specialty' => $_POST['Specialty'],
            'Coach_Type' => $_POST['Type'],
            );
            $userData2 = array(
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
            
            );
            $condition1 = array('COACH_ID' => $_POST['COACH_ID']);
            $condition2 = array('userID' => $_POST['userID']);
            $update1 = $pdo->update($tblName,$userData,$condition1);
            $update2 = $pdo->update($tblName2,$userData2,$condition2);
            echo "<script>alert('Coach Information Successfully Modified!');window.location.href='../PT-Coaches.php';</script>";
       
        
    }
}