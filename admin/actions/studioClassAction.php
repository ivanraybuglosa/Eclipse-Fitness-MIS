<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'studioclass';

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
		
            'SC_Name' => $_POST['scname'],
            'SC_Capacity' => $_POST['sccapacity'],
            'SC_Venue' => $_POST['venue']
        );
        $insert = $pdo->insert($tblName,$userData);
        echo "<script>alert('Studio Class Information Successfuly saved!');window.location.href='../Maintenance-StudioClass.php';</script>";
         
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'SC_Name' => $_POST['scname'],
            'SC_Capacity' => $_POST['sccapacity'],
            'SC_Venue' => $_POST['scvenue']
            ); 
            $condition = array('SC_Code' => $_POST['scCode']);
            $update = $pdo->update($tblName,$userData,$condition);
            echo "<script>alert('Studio Class Information Successfuly Modified!');window.location.href='../Maintenance-StudioClass.php';</script>";
        
        }
}