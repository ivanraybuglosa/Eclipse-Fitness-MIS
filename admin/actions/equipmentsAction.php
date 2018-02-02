<?php
session_start();
include('../../dbConnect.php'); ;
$pdo = new dbConnect();
$tblName = 'equipment';
$tblName1 = 'equipmentinventory';



if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
	if($_REQUEST['action_type'] == 'add'){
		$userData = array(
			'E_Type' => $_POST['type'],
			'E_Model' =>  $_POST['model']
		);
		$insert = $pdo->insert($tblName,$userData);
		$eCode = $pdo->selectEquip($_POST['type']);

		$userData2 = array(
			
			'EI_Quantity' => $_POST['quantity'],
			'EI_DeliveryDate' => $_POST['deliveryDate'],
			'EI_DeliveryTime' => $_POST['deliveryTime'],
			'EI_Supplier' => $_POST['supplier'],
			'E_Code' => $eCode

		);
		$insert = $pdo->insert($tblName1,$userData2);

			
		
		echo "<script>alert('Equipment Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";
	

	}elseif($_REQUEST['action_type'] == 'restock'){
		$userData3 = array(
			'E_Code' => $_POST['E_Code'],
			'EI_Quantity' => $_POST['restockQuantity'],
			'EI_DeliveryDate' => $_POST['restockDeliveryDate'],
			'EI_DeliveryTime' => $_POST['restockDeliveryTime'],
			'EI_Supplier' => $_POST['restockSupplier']
		);
		$insert = $pdo->insert($tblName1,$userData3);
		echo "<script>alert('Equipment Successfully restock!');window.location.href='../Amenities-Equipments.php';</script>";

	}
}