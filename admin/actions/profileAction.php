<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();
$tblName = 'client';
$tblName2 = 'membership';

$tableMem = 'membershiptype';
$tblName3 = 'transaction';
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));
date_default_timezone_set('Asia/Manila');
$today = date("Y-m-d");
$id = 'MS_Code';

    
   

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){    
    if($_REQUEST['action_type'] == 'add'){
       
   
        $userData = array(

            'CLIENT_bday' =>  ($_POST['C_year'].'/'.$_POST['C_month'].'/'.$_POST['C_day']),
            'CLIENT_year' => $_POST['C_year'],
            'CLIENT_month' => $_POST['C_month'],
            'CLIENT_day' => $_POST['C_day'],
            'CLIENT_FirstName' => $_POST['name'],
            'CLIENT_MiddleName' => $_POST['middle'],
            'CLIENT_LastName' => $_POST['surname'],            
            'CLIENT_Gender' => $_POST['gender'],
            'CLIENT_Email' => $_POST['email'],
            'CLIENT_ContactNumber' => $_POST['contactNumber'],
            // 'CLIENT_userAccount' => $_POST['userAccount'],
            'CLIENT_RegStatus' => $_POST['status'],
            'CLIENT_regDATE' => $today,
            'month' => $month,
            'year' => $year           
            
        );
       
        
        $insert = $pdo->insert($tblName,$userData);
        echo "<script>alert('Client Successfully Registered');window.location.href='../Client-Profile.php';</script>";
        $statusMsg = $insert?'User data has been inserted successfully.':'Some problem occurred, please try again.';
    
    
}elseif($_REQUEST['action_type'] == 'enroll'){
            
            $type =  $_POST['type'];
            $duration = $_POST['duration'];
            $expiry = date('Y-m-d',strtotime(" +".$duration." months", strtotime($today)));
            $compare = $pdo->selectIdCompare($type,$duration);

            $userData2 = array(
                'MS_Code' => $compare,
                'M_regDate' => $today,
                'CLIENT_ID' => $_POST['client'],
                'M_expiryDate' => $expiry,
                'M_membershipStatus' => 'Active',
                'month' => $month,
                'year' => $year  
            );
             $expiry = $pdo->checkMembership($_POST['client'],array("order_by" => "M_Code DESC"));
           
                       if($expiry <= $today || empty($expiry)){
                            $insert = $pdo->insert($tableMem, $userData2);
                            $id = $_POST['CLIENT_ID'];
                            echo "<script>alert('Client Successfully Enrolled for Membership!');window.location.href='../Client-Profile-User1.php?id=".$id. " '</script>";
                                    
                            $price = $pdo->selectPrice($type,$duration);
                            $userData3 = array(
                                'CLIENT_ID' => $_POST['client'],
                                'TR_Type' => 'Membership',
                                'TR_Bill' => $price,
                                'TR_Status' => 'unpaid',
                                'TR_TransactionDate' => $today,
                                'year' => $year,
                                'month' => $month
                            );
                            $insert2 = $pdo->insert($tblName3, $userData3);
                            $userData4 = array(
                                'CLIENT_RegStatus' => $_POST['status']
                            );
                            $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
                            $insert3 = $pdo->update($tblName, $userData4,$condition);
                            
                            
          
            
            }else{
                
                $id = $_POST['CLIENT_ID'];
                    echo "<script>alert('Client Membership Enrollment failed!');window.location.href='../Client-Profile-User1.php?id='".$id."';</script>";
                    
            }

            
        
}elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'CLIENT_bday' =>  ($_POST['C_year'].'/'.$_POST['C_month'].'/'.$_POST['C_day']),
            'CLIENT_year' => $_POST['C_year'],
            'CLIENT_month' => $_POST['C_month'],
            'CLIENT_day' => $_POST['C_day'],
            'CLIENT_FirstName' => $_POST['firstName'],
            'CLIENT_LastName' => $_POST['lastName'],            
            'CLIENT_Gender' => $_POST['gender'],
            'CLIENT_Email' => $_POST['Email'],
            'CLIENT_ContactNumber' => $_POST['contactNum'],
            // 'CLIENT_userAccount' => $_POST['userAccount']
            );
            $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
            $update = $pdo->update($tblName,$userData,$condition);
            $id = $_POST['CLIENT_ID'];
                            echo "<script>alert('Client Information Modified!');window.location.href='../Client-Profile-User1.php?id=".$id. " ';</script>";
                                    $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
                                    $_SESSION['statusMsg'] = $statusMsg;
            $statusMsg = $update?'Client data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
            
        
    }
}

