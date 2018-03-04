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

    $userData = array(
      'Pay_cash' => $_POST['receivedAmount'],
      'Pay_amount' => $_POST['paymentAmount'],
      'Pay_change' => $_POST['receivedAmount'] - $_POST['paymentAmount'],
      'Pay_date' => $date,
      'Pay_time' => $time,
      'month' => $month,
      'year' => $year

    );
    $insert = $pdo->insert($tblName2,$userData);
    $id = $pdo->payID($_POST['receivedAmount'],$date,$time);

    $pays = $pdo->payHistory($_POST['CLIENT_ID'], array("order_by" => "TR_ID DESC"));
      if(!empty($pays)){
        $count = 0;
        foreach($pays as $pay){
          $userData2 = array(
            'TR_status' => 'paid',
            'Pay_ID' => $id
          );
          $condition = array(
            'TR_Status' => 'Unpaid',
            'CLIENT_ID' => $_POST['CLIENT_ID']
            );
          $update = $pdo->update('transaction',$userData2,$condition);
        }
      }

    echo "<script>alert('Payment successfully saved!');window.location.href='../Client-Transaction.php';</script>";

  }
}
