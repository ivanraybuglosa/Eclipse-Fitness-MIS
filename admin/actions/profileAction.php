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
$date = date("Y-m-d");
$time=date("H:i:s");
$id = 'MS_Code';

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);

    
   

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){    
    if($_REQUEST['action_type'] == 'add'){
        $first = $_POST['name'];
        $last = $_POST['surname'];
   
        $userData = array(

            'CLIENT_bday' =>  ($_POST['C_year'].'/'.$_POST['C_month'].'/'.$_POST['C_day']),
            'CLIENT_year' => $_POST['C_year'],
            'CLIENT_month' => $_POST['C_month'],
            'CLIENT_day' => $_POST['C_day'],
            'CLIENT_FirstName' => $first,
            'CLIENT_MiddleName' => $last,
            'CLIENT_LastName' => $_POST['surname'],            
            'CLIENT_Gender' => $_POST['gender'],
            'CLIENT_Email' => $_POST['email'],
            'CLIENT_ContactNumber' => $_POST['contactNumber'],
            'CLIENT_RegStatus' => $_POST['status'],
            'CLIENT_regDATE' => $date,
            'month' => $month,
            'year' => $year           
            
        );

        $desc = ' '.$first. ' has been registered ';
            $log = array (
                'userID' => $userid,
                'log_activity' => 'Client Registration',
                'log_description' => $desc,
                'log_date' => $date,
                'log_time' => $time
            );  
            $insert = $pdo->insert('log',$log);
       
        
        $insert = $pdo->insert($tblName,$userData);
        echo "<script>alert('Client Successfully Registered');window.location.href='../Client-Profile.php';</script>";
        $statusMsg = $insert?'User data has been inserted successfully.':'Some problem occurred, please try again.';
    
    
}elseif($_REQUEST['action_type'] == 'enroll'){
            
            $type =  $_POST['type'];
            $duration = $_POST['duration'];
            $expiry = date('Y-m-d',strtotime(" +".$duration." months", strtotime($date)));
            $compare = $pdo->selectIdCompare($type,$duration);

            $userData2 = array(
                'MS_Code' => $compare,
                'M_regDate' => $date,
                'CLIENT_ID' => $_POST['client'],
                'M_expiryDate' => $expiry,
                'M_membershipStatus' => 'Active',
                'month' => $month,
                'year' => $year  
            );
             $expiry = $pdo->checkMembership($_POST['client'],array("order_by" => "M_Code DESC"));
           
                       if($expiry <= $date || empty($expiry)){
                            $insert = $pdo->insert($tableMem, $userData2);
                            $id = $_POST['CLIENT_ID'];
                            echo "<script>alert('Client Successfully Enrolled for Membership!');window.location.href='../Client-Profile-User1.php?id=".$id. " '</script>";
                                    
                            $price = $pdo->selectPrice($type,$duration);
                            $userData3 = array(
                                'CLIENT_ID' => $_POST['client'],
                                'TR_Type' => 'Membership',
                                'TR_Bill' => $price,
                                'TR_Status' => 'unpaid',
                                'TR_TransactionDate' => $date,
                                'year' => $year,
                                'month' => $month
                            );
                            $insert2 = $pdo->insert($tblName3, $userData3);
                            $userData4 = array(
                                'CLIENT_RegStatus' => $_POST['status']
                            );
                            $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
                            $insert3 = $pdo->update($tblName, $userData4,$condition);
                            $first = $pdo->getClientFirst($_POST['CLIENT_ID']);
                            $desc = ' '.$first. ' has been enrolled to membership';
                                $log = array (
                                    'userID' => $userid,
                                    'log_activity' => 'Membership Registration',
                                    'log_description' => $desc,
                                    'log_date' => $date,
                                    'log_time' => $time
                                );  
                                $insert = $pdo->insert('log',$log);
                            
          
            
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
                
                $first = $pdo->getClientFirst($_POST['CLIENT_ID']);
                $desc = ' '.$first. '\'s profile has been modified';
                    $log = array (
                        'userID' => $userid,
                        'log_activity' => 'Client Profile Modification',
                        'log_description' => $desc,
                        'log_date' => $date,
                        'log_time' => $time
                    );  
                    $insert = $pdo->insert('log',$log);  
            
        
    }
}

