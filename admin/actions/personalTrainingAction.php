<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'studioclass';

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
        
            'SC_Name' => $_POST['scname'],
            'SC_Capacity' => $_POST['sccapacity']
        );
        $insert = $pdo->insert($tblName,$userData);
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../PT-ContractsFinal.php");
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'SC_Name' => $_POST['scname'],
            'SC_Capacity' => $_POST['sccapacity']
            );
            $condition = array('SC_Code' => $_POST['scCode']);
            $update = $pdo->update($tblName,$userData,$condition);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../PT-ContractsFinal.php");
        }
}