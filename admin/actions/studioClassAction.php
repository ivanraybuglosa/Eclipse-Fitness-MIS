<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'studioclass';

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $sc = $_POST['scname'];
        $userData = array(
		
            'SC_Name' => $sc,
            'SC_Capacity' => $_POST['sccapacity'],
            'SC_Venue' => $_POST['venue']
        );
        $insert = $pdo->insert($tblName,$userData);


        $desc = ' '.$sc.' has been added as a studio class';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Studio Class Registration',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);
        echo "<script>alert('Studio Class Information Successfuly saved!');window.location.href='../Maintenance-StudioClass.php';</script>";
         
    }elseif($_REQUEST['action_type'] == 'edit'){
        $sc = $_POST['scname'];
            $userData = array(
            'SC_Name' => $sc,
            'SC_Capacity' => $_POST['sccapacity'],
            'SC_Venue' => $_POST['scvenue']
            ); 
            $condition = array('SC_Code' => $_POST['scCode']);
            $update = $pdo->update($tblName,$userData,$condition);

            $desc = ' '.$sc.' class information has been modified';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Studio Class Modification',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                );  
                $insert = $pdo->insert('log',$log);
            echo "<script>alert('Studio Class Information Successfuly Modified!');window.location.href='../Maintenance-StudioClass.php';</script>";
        
        }
}