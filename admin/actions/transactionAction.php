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

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
  if($_REQUEST['action_type'] == 'add'){

          $userData2 = array(
            'TR_status' => 'paid'
          );
          $condition = array(
            'TR_ID' => $_POST['TR_ID']
            );
          $update = $pdo->update('transaction',$userData2,$condition);


    echo "<script>alert('Client Transaction successfully checked out!');window.location.href='../Client-Transaction.php';</script>";

  }
}
