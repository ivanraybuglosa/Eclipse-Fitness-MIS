<?php 
include '../../dbConnect.php';
$pdo = new dbConnect();
$caID = $_GET['caID'];
$SCS_Code = $_GET['SCS_Code'];
$tblName1 = 'clientassignment';
$condition = array('CA_Code' => $caID);
$delete = $pdo->delete($tblName1,$condition);
echo "<script>alert('Participant successfully removed from the list! ');window.location.href='../StudioClass-Schedule.php?id=".$SCS_Code."';</script>"
?>