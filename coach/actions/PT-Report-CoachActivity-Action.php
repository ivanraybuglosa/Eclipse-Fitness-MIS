
<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName1 = 'attendance';
$tblName2 = 'client';
$tableName3='transaction';

$firstname = 'CLIENT_FirstName';
$lastname = 'CLIENT_LastName';
$fullname = $firstname. " " .$lastname;
$column1 = $fullname;
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));
$date = date("d/m/Y");
$time=date("H:i:s", strtotime("+7 HOURS"));

  //working
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'check'){  
       
         $userData = array(
            'CLIENT_ID' => $_POST['clientName'],
            'A_TowelQty' => $_POST['towel'],
            'A_LockerKey' => $_POST['Locker'],
            'A_TimeIn' => $time,
            'A_Year' => $year,
            'A_Month' => $month
        );
        
        
        $insert = $pdo->insert($tblName1,$userData);
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../attendance.php");
        //working
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'A_TowelQty' => $_POST['modifiedTowel'],
            'A_LockerKey' => $_POST['modifiedLocker']
            );

            $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
            $update = $pdo->update($tblName1,$userData,$condition);
            $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:../attendance.php");
        //working
    }elseif($_REQUEST['action_type'] == 'out'){ 
        $userData = array(
            'A_TimeOut' => $time,
            'A_fdate' => $date
        );

        $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
        $update1 = $pdo->update($tblName1,$userData,$condition);
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../attendance.php");

    }
}

 