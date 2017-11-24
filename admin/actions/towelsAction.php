<?php
session_start();
include('../../dbConnect.php'); ;
$db = new dbConnect();
$tblName = 'towels';
$today = date("Y-m-d");
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	sleep(2);
	if($_REQUEST['action_type'] == 'supply'){
		$userData = array(
			'towel_supplied' => $_POST['supplied'],

			'towel_date' => $today

		);
		$insert = $db->insert($tblName,$userData);
		header("Location:../Amenities-GymTowels.php");
	}elseif($_REQUEST['action_type'] == 'laundry'){
		$userData = array(
			'towel_laundry' => $_POST['laundry'],

			'towel_date' => $today

		);
		$insert = $db->insert($tblName,$userData);
		header("Location:../Amenities-GymTowels.php");
	}elseif($_REQUEST['action_type'] == 'edit'){
		$userData = array(
			'WORKOUT_Code' => $_POST['workoutCode'],
			'WORKOUT_Name' => $_POST['workoutName'],
			'WORKOUT_Type' => $_POST['workoutType'],
			'WORKOUT_Category' => $_POST['workoutCategory'],
			'WORKOUT_BodyPart' => $_POST['BodyPart']
		);
		$condition = array('WORKOUT_Code' => $_POST['workoutCode']);
		$update = $db->update($tblName,$userData,$condition);
		$statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
		$_SESSION['statusMsg'] = $statusMsg;
		header("Location:../Maintenance-Workouts.php");

	}elseif($_REQUEST['action_type'] == 'delete'){
		if(!empty($_GET['WORKOUT_Code'])){
			$condition = array('WORKOUT_Code' => $_GET['WORKOUT_Code']);
			$delete = $db->delete($tblName,$condition);
			$statusMsg = $delete?'User data has been deleted successfully.':'Some problem occurred, please try again.';
			$_SESSION['statusMsg'] = $statusMsg;
			header("Location:../Maintenance-Workouts.php");
		}
	}
}