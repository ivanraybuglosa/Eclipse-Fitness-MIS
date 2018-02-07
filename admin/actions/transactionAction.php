<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName2 = 'transaction';


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'edit'){
        
        $userData = array(

            'TR_status' => 'paid'
        );
        $condition = array('TR_ID' => $_POST['TR_ID']);
        $insert = $pdo->update($tblName2,$userData,$condition);
        echo "<script>alert('Transaction Successfully checked out!');window.location.href='../Client-Transaction.php';</script>";
            $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            
    }
}
