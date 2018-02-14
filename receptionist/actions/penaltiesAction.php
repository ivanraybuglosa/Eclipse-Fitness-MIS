<?php
session_start();
include('../../dbConnect.php'); ;
$pdo = new dbConnect();
$tblName = 'penalties';



if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	if($_REQUEST['action_type'] == 'edit'){

		$userData = array(

			'P_Fee' => $_POST['fee']
		);
		
		$condition = array('P_ID' => $_POST['P_ID']);
        $update = $pdo->update($tblName,$userData,$condition);
        echo "<script>alert('Fee successfully modified!');window.location.href='../Maintenance-PenaltiesAndOtherFees.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;

}
}
?>