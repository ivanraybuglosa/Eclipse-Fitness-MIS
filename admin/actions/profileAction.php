<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'client';
$today = date("Y-m-d");
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){    
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
            

            'CLIENT_bday' =>  ($_POST['C_month'].'/'.$_POST['C_day'].'/'.$_POST['C_year']),
            //'CLIENT_year' => $_POST['C_year'],
            //'CLIENT_month' => $_POST['C_month'],
            //'CLIENT_day' => $_POST['C_day'],
            'CLIENT_regDATE' => $today,
            
       
            'CLIENT_FirstName' => $_POST['name'],
            'CLIENT_LastName' => $_POST['surname'],
            
            'CLIENT_Gender' => $_POST['gender'],
            'CLIENT_Email' => $_POST['email'],
            'CLIENT_RegStatus' => $_POST['C_status'],
            'CLIENT_StatusDuration' => $_POST['C_duration'],
            'CLIENT_ContactNumber' => $_POST['contactNumber']
        );
        $insert = $pdo->insert($tblName,$userData);
        $statusMsg = $insert?'User data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../Client-Profile.php");
    }
}elseif($_REQUEST['action_type'] == 'edit'){
        if(!empty($_POST['CLIENT_ID'])){
            $userData = array(
            'CLIENT_FirstName' => $_POST['name'],
            'CLIENT_LastName' => $_POST['surname'],
            'CLIENT_Gender' => $_POST['gender'],
            'CLIENT_Email' => $_POST['email'],
            'CLIENT_RegStatus' => $_POST['C_status'],
            'CLIENT_StatusDuration' => $_POST['C_duration'],
            'CLIENT_ContactNumber' => $_POST['contactNumber']
            );
            $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
            $update = $db->update($tblName,$userData,$condition);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../Client-Profile.php");
        }
    }elseif($_REQUEST['action_type'] == 'delete'){
        if(!empty($_GET['WORKOUT_Code'])){
            $condition = array('WORKOUT_Code' => $_GET['WORKOUT_Code']);
            $delete = $db->delete($tblName,$condition);
            $statusMsg = $delete?'User data has been deleted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:workouts.php");
        }
    }
