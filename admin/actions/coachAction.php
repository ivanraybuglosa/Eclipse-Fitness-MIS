<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'coach';
$tblName2 = 'users';
$id = "userID";

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $last = $_POST['LastName'],
        $first = $_POST['FirstName'],
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
        $desc = ' '.$first. ' '.$last.' has been as a coach ';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Coach Registration',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);
        echo "<script>alert('Coach Information Successfully Saved!');window.location.href='../PT-Coaches.php';</script>";
         
    
    }elseif($_REQUEST['action_type'] == 'edit'){
        $last = $_POST['LastName'],
        $first = $_POST['FirstName'],
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

            $desc = ' '.$first. ' '.$last.'\'s coach information has been modified';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Coach Registration',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);
            echo "<script>alert('Coach Information Successfully Modified!');window.location.href='../PT-Coaches.php';</script>";
       
        
    }
}