<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName2 = 'payment';
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time = date("H:i:s", strtotime("+7 HOURS"));
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
  if($_REQUEST['action_type'] == 'add'){

          $userData2 = array(
            'TR_status' => 'paid'
          );
          $condition = array(
            'TR_ID' => $_POST['TR_ID']
            );
          $update = $pdo->update('transaction',$userData2,$condition);
          

          $first = $pdo->getClientFirst($_POST['CLIENT_ID']);
          $desc = ' '.$first. '\'s transaction has been checked out';
              $log = array (
                  'userID' => $userid,
                  'log_activity' => 'Transaction Checkout',
                  'log_description' => $desc,
                  'log_date' => $date,
                  'log_time' => $time
              );  
              $insert = $pdo->insert('log',$log);  

    echo "<script>alert('Client Transaction successfully checked out!');window.location.href='../Client-Transaction.php';</script>";

  }
}
