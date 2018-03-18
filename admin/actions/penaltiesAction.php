<?php
session_start();
include('../../dbConnect.php'); ;
$pdo = new dbConnect();
$tblName = 'penalty';

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time=date("H:i:s");
$userid = $pdo->getUserID($user,$pass);

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	if($_REQUEST['action_type'] == 'edit'){

		$userData = array(

			'P_Fee' => $_POST['fee']
		);

		$condition = array('P_ID' => $_POST['P_ID']);
		$update = $pdo->update($tblName,$userData,$condition);
		
		$desc = 'A penalty fee has been modified';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Penalty Modification',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
			$insert = $pdo->insert('log',$log);
			
        echo "<script>alert('Fee successfully modified!');window.location.href='../Maintenance-PenaltiesAndOtherFees.php';</script>";
       

}
}
?>
