<?php
session_start();
include('../../dbConnect.php'); ;
$db = new dbConnect();
$tblName = 'towels';
$today = date("m-d-Y");
$time=date("h:i:s A", strtotime("now" +8));
$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());
$ret = $conn->query("SELECT  SUM(towelTR_returned) as total FROM `towelstransactions` INNER JOIN `attendance` ON towelstransactions.A_CODE = attendance.A_CODE WHERE `A_id` = '2' ");

$var = $_POST['laundry1'];


$fret = $ret->fetch_array();
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	sleep(2);
	if($_REQUEST['action_type'] == 'supply'){
		$userData = array(
			'towel_type' => $_POST['supply'],
			'towel_amount' => $_POST['supplied'],
			'towel_date' => $today,
			'towel_time' => $time

		);
		$insert = $db->insert($tblName,$userData);
		header("Location:../Amenities-GymTowels.php");
	}elseif($_REQUEST['action_type'] == 'laundry'){
			if($var > $fret['total']){
				echo "<script>alert('Not valid');</script>";
				header("Location:../Amenities-GymTowels.php");

			}elseif($var < $fret){

		$userData = array(
			'towel_type' => $_POST['laundried'],
			'towel_amount' => $_POST['laundry1'],
			'towel_date' => $today,
			'towel_time' => $time


		);

		$insert = $db->insert($tblName,$userData);
		header("Location:../Amenities-GymTowels.php");
			}

	}
}