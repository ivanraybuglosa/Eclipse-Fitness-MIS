<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'trainingpackage';

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
        
            'TP_PackageType' => $_POST['packageType'],
            'TP_CoachType' => $_POST['coachType'],
            'TP_Price' => $_POST['price'],
            'TP_Validity' => $_POST['validity']
        );
        $insert = $pdo->insert($tblName,$userData);
        echo "<script>alert('Training Package Information Successfully Saved!');window.location.href='../Maintenance-TrainingPackage.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;   
        
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'TP_Code' => $_POST['tpCode'],
            'TP_PackageType' => $_POST['packageType'],
            'TP_CoachType' => $_POST['coachType'],
            'TP_Price' => $_POST['price'],
            'TP_Validity' => $_POST['validity']
            );
            $condition = array('TP_Code' => $_POST['tpCode']);
            $update = $pdo->update($tblName,$userData,$condition);
            echo "<script>alert('Training Package Information Successfully Modified!');window.location.href='../Maintenance-TrainingPackage.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;   
        
    }elseif($_REQUEST['action_type'] == 'delete'){
        if(!empty($_GET['TP_Code'])){
            $condition = array('TP_Code' => $_GET['TP_Code']);
            $delete = $db->delete($tblName,$condition);
            $statusMsg = $delete?'Training Package data has been deleted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../Maintenance-TrainingPackage.php");
        }
    }
}
