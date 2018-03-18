<?php
session_start();
include('../../dbConnect.php'); ;
$pdo = new dbConnect();
$tblName = 'equipment';
$tblName1 = 'equipmentinventory';

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);

$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	if($_REQUEST['action_type'] == 'add'){
		$type = $_POST['type'];
		$mod = $_POST['model'];
		$userData = array(
			'E_Type' => $type,
			'E_Model' =>  $mod
		);
		$insert = $pdo->insert($tblName,$userData);
		$eCode = $pdo->selectEquip($type,$mod);

		$userData2 = array(
			
			'EI_Quantity' => $_POST['quantity'],
			'EI_DeliveryDate' => $_POST['deliveryDate'],
			'EI_DeliveryTime' => $_POST['deliveryTime'],
			'EI_Activity' => 'Restock',
			'E_Code' => $eCode,
			'month' => $month,
			'year' => $year

		);
		$insert = $pdo->insert($tblName1,$userData2);

		$desc = ' '.$type. ' '.$mod.' has been added';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Equipment Monitoring',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);

			
		
		echo "<script>alert('Equipment Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";
	

	}elseif($_REQUEST['action_type'] == 'restock'){
		$qty =  $_POST['restockQuantity'],
		$userData3 = array(
			'E_Code' => $_POST['E_Code'],
			'EI_Quantity' => $qty,
			'EI_DeliveryDate' => $_POST['restockDeliveryDate'],
			'EI_DeliveryTime' => $_POST['restockDeliveryTime'],
			'EI_Activity' => $_POST['activity'],
			'month' => $month,
			'year' => $year
		);
		$insert = $pdo->insert($tblName1,$userData3);

		if($_POST['activity'] == 'restock' ){
			$desc = ' '.$qty.' equipment has been restock ';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Equipment restock',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
			$insert = $pdo->insert('log',$log);
			echo "<script>alert('Equipment Successfully restocked!');window.location.href='../Amenities-Equipments.php';</script>";
		}else{
			$desc = ' '.$qty.' equipment has been discarded ';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Equipment discarded',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
			$insert = $pdo->insert('log',$log);
			echo "<script>alert('Equipment Successfully discarded!');window.location.href='../Amenities-Equipments.php';</script>";
		}
		

	}
}