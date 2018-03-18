<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName1 = "towelInventory";

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time = date("h:i:s");

$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$userid = $pdo->getUserID($user,$pass);

$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));

if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $activity = $_POST['activity'];
        $borrowed = $pdo->previousBorrowed();
        $available = $pdo->previousAvailable();
        $returned = $pdo->previousReturned();
        $laundry = $pdo->previousLaundry($date);
        $onhand = $pdo->previousOnhand();
        $supp = $_POST['towelAmount'];

        if($activity == 'Supply'){
          $userData = array(
              'TI_Supplied' => $supp,
              'TI_Onhand' => ($supp + $available),
              'TI_Date' => $date,
              'TI_Time' => $time,
              'TI_Type' => 'Supply',
              'month' => $month,
              'year' => $year

          );
          $insert = $pdo->insert($tblName1,$userData);
          $desc = ' '.$supp.' towels supplied ';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Towel Supplied',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                ); 
                $insert = $pdo->insert('log',$log);

          $userData4 = array(
              'TI_Available' => ($available + $_POST['towelAmount']),
              'TI_Borrowed' => $borrowed,
              'TI_Returned' => $returned
          );

          $condition = array('TI_Date' => $date);
          $update1 = $pdo->update($tblName1,$userData4,$condition);



          echo "<script>alert('Towel Successfully Supplied');window.location.href='../Amenities-GymTowels.php';</script>";
        }elseif($activity == 'Laundry'){
          $laund = $_POST['towelAmount'];
          $userData2 = array(
             'TI_Laundry' => $laund,
             'TI_Date' => $date,
             'TI_Time' => $time,
             'TI_Type' => 'Laundry',
             'month' => $month,
             'year' => $year
          );

          if($laund <= $returned ){
             $insert = $pdo->insert($tblName1,$userData2);

              $userData3 = array(
             'TI_Available' => $available,
             'TI_Borrowed' => $borrowed,
             'TI_Returned' => ($laund - $returned),
             'TI_Onhand' =>  $available + ($borrowed + $returned) + $laundry
             );

             $condition = array('TI_Date' => $date);
             $update1 = $pdo->update($tblName1,$userData3,$condition);

             $desc = ' '.$laund.' towels laundried ';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Towel Laundry',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                ); 
                $insert = $pdo->insert('log',$log);

             echo "<script>alert('Laundry towels Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";

          }else{
            //Towel Laundried is greater than returned towels
             echo "<script>alert('Towel Laundry Failed!');window.location.href='../Amenities-GymTowels.php';</script>";

          }
        }elseif($activity == 'Delivered'){
          $del = $_POST['towelAmount'];
          $userData2 = array(
             'TI_Delivered' => del,
             'TI_Date' => $date,
             'TI_Time' => $time,
             'TI_Type' => 'Delivered',
             'month' => $month,
             'year' => $year
          );

          if($del <= $laundry ){
             $insert = $pdo->insert($tblName1,$userData2);
            
              $userData3 = array(
             'TI_Available' => ($available + $del),
             'TI_Borrowed' => $borrowed,
             'TI_Returned' => $returned,
             'TI_Laundry' => ($del - $laundry),
             'TI_Onhand' => $available + ($borrowed + $returned) + $laundry
             );

             $condition = array('TI_Date' => $date);
             $update1 = $pdo->update($tblName1,$userData3,$condition);

             $desc = ' '.$del.' towels delivered ';
                $log = array (
                    'userID' => $userid,
                    'log_activity' => 'Towel Delivery',
                    'log_description' => $desc,
                    'log_date' => $date,
                    'log_time' => $time
                ); 
                $insert = $pdo->insert('log',$log);

             echo "<script>alert('Laundry towels Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";
           }
          else{
             echo "<script>alert('Towel Delivery Failed!');window.location.href='../Amenities-GymTowels.php';</script>";

          }
        }

      }
    }
