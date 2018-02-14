
<?php
session_start();
include '../../dbConnect.php';


  //working
$conn = new mysqli("localhost", "root", "", "eclipse_db") or die(mysqli_error());
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	if($_REQUEST['action_type'] == 'filter'){ 
		$startDate = $_POST['filter_start'];
		$endDate = $_POST['filter_end'];



        $statusMsg = $filter?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../Client-attendance-Report.php");
   }
}

