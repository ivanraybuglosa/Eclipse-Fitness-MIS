<?php
session_start();
include('../../dbConnect.php'); ;
$db = new dbConnect();
$tblName = 'equipment';
$today = date("m-d-Y");
$time=date("h:i:s A", strtotime("now" +8));

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	sleep(2);
	if($_REQUEST['action_type'] == 'add'){
		$userData = array(
			'E_Name' => $_POST['type'],
			'E_Type' => $_POST['model'],
			'E_Quantity' => $_POST['quantity'],
			'E_Status' => $_POST['equip'],
			'E_DateChecked' => $today

		);
		$insert = $db->insert($tblName,$userData);
		header("Location:../Amenities-GymTowels.php");
	

	}
}