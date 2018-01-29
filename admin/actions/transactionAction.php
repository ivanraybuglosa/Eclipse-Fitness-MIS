<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName2 = 'transaction';


if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        
        $userData = array(

            'TR_status' => 'paid'
        );
        $condition = array(
            'CLIENT_ID' => $_POST['CLIENT_ID'],
            'TR_ID' => $_POST['TR_ID']
        );
        $insert = $pdo->update($tblName2,$userData,$condition);
        $statusMsg = $insert?'Training Log data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        $id = $_POST['CLIENT_ID'];
        header("Location:../Client-Transaction.php");
    }
}
