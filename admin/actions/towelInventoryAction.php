<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName1 = "towelInventory";
$date = date("Y-m-d");
$time = date("h:i");
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){ 
        

        $borrowed = $pdo->previousBorrowed($date);
        $avail = $pdo->previousAvailable();
        $returned = $pdo->previousReturned();
        $userData = array(
            'TI_Supplied' => $_POST['supply'],
            'TI_Date' => $date,
            'TI_Time' => $time,
            'TI_Type' => 'Supply',
            'month' => $month,
            'year' => $year
            
        );
        $insert = $pdo->insert($tblName1,$userData);
        $userData4 = array(
            'TI_Available' => ($avail + $_POST['supply']),
            'TI_Borrowed' => $borrowed,
            'TI_Returned' => $returned
        );  

        $condition = array('TI_Date' => $date);
        $update1 = $pdo->update($tblName1,$userData4,$condition);


        
        echo "<script>alert('Towel Successfully Supplied');window.location.href='../Amenities-GymTowels.php';</script>";
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
    }elseif($_REQUEST['action_type'] == 'laundry'){
        
        
         $borrowed = $pdo->borrowed();
         $returned = $pdo->previousReturned();
         $available = $pdo->previousAvailable();
         $previousSupplied = $pdo->previousSupplied();

         $userData2 = array(
            'TI_Laundry' => $_POST['laundry'],
            'TI_Date' => $date,
            'TI_Time' => $time,
            'TI_Type' => 'Laundry',
            'month' => $month,
            'year' => $year
         );

         if($_POST['laundry'] <= $returned ){
            $insert = $pdo->insert($tblName1,$userData2);

             $userData3 = array(
            'TI_Available' => $available,
            'TI_Borrowed' => $borrowed,
            'TI_Returned' => ($_POST['laundry'] - $returned)
            );

            $condition = array('TI_Date' => $date);
            $update1 = $pdo->update($tblName1,$userData3,$condition);


            echo "<script>alert('Laundry towels Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";
            $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
         }else{
            echo "<script>alert('Towel Laundry Failed!');window.location.href='../Amenities-GymTowels.php';</script>";
            $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
         }

         

        

        



    }
}

 