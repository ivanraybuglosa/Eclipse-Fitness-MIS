<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'traininglog';
$tblName2 = 'transaction';
$packageType = $_POST['packageType'];
$coachType = $_POST['coachType'];
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));
$duration = "TP_Validity";

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $duration = $pdo->getValidity('TP_Validity',$packageType,$coachType,'trainingpackage');
        $expiry =  date("Y-m-d",strtotime($date. ' + '.$duration.' days'));
        $compare = $pdo->selectTraining($packageType,$coachType);



        $userData = array(
            'COACH_ID' => $_POST['coach'],
            'CLIENT_ID' => $_POST['CLIENT_ID'],
            'TL_RegDate' => $date,
            'TL_Expiry' => $expiry,
            'TP_Code' => $compare,
            'TL_TrainingStatus' => 'On-Going',
            'month' => $month,
            'year' => $year
        );

        $expiry = $pdo->checkPTExpiry($_POST['CLIENT_ID']);
        $trainingStatus = $pdo->checkTrainingStatus($_POST['CLIENT_ID']);
      
if(($expiry <= $date && $trainingStatus === "Completed") || (empty($expiry) && empty($trainingStatus))){

                $insert = $pdo->insert($tblName,$userData);
                $first = $pdo->getClientFirst($_POST['CLIENT_ID']);
                $desc = ' '.$first. ' has been enrolled to personal training ';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Personal Training Registration',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);
                
                $id = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Successfully Enrolled for Personal Training!');window.location.href='../Client-Profile-User1.php?id=".$id. " ';</script>";
                $price = $pdo->ptPrice($packageType,$duration);
                $userData2 = array(
                    'CLIENT_ID' => $_POST['CLIENT_ID'],
                    'TR_Type' => 'Personal Training',
                    'TR_Bill' => $price,
                    'TR_TransactionDate' => $date,
                    'TR_Status' => 'unpaid',
                    'year' => $year,
                    'month' => $month
                );
                $insert = $pdo->insert($tblName2,$userData2);
                

                
            }else{
                $id = $_POST['CLIENT_ID'];
                echo "<script>alert('Client Personal Training Enrollment Failed!');window.location.href='../Client-Profile-User1.php?id=".$id. " ';</script>";
            }
        }
    
}
