<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName2 = 'payment';


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        
        $userData = array(
            'TR_ID' => $_POST['TR_ID'],
            'Pay_amount' => $_POST['paymentAmount'],
            'Pay_date' => $_POST['paymentDate'],
            'Pay_time' => $_POST['paymentTime']
        );
        $insert = $pdo->insert($tblName2,$userData);

        $payment = $pdo->payment($_POST['TR_ID']);
        $bill = $pdo->bill($_POST['TR_ID']);

            $userData2 = array(
                'TR_status' => 'paid'
            );
            if($payment === $bill){
                $condition = array('TR_ID' => $_POST['TR_ID']);
                $update = $pdo->update('transaction',$userData2,$condition);
            }
                echo "<script>alert('Payment successfully saved!');window.location.href='../Client-Transaction.php';</script>";
            
    }
}
