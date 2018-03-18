<?php 
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$caID = $_GET['caID'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);
$client = $_GET['CLIENT_ID'];
$SCS_Code = $_GET['SCS_Code'];
$tblName1 = 'clientassignment';
$condition = array('CA_Code' => $caID);
$delete = $pdo->delete($tblName1,$condition);


    $first = $pdo->getClientFirst($client);
        $desc = ' '.$first. ' has been remove from a studio class session';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Studio Class Participant',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );
            $insert = $pdo->insert('log',$log);


echo "<script>alert('Participant successfully removed from the list! ');window.location.href='../StudioClass-Schedule.php?id=".$SCS_Code."';</script>"
?>