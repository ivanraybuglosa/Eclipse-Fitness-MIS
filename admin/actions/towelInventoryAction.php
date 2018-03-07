<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName1 = "towelInventory";

date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d");
$time = date("h:i");
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


        if($activity == 'Supply'){
          $userData = array(
              'TI_Supplied' => $_POST['towelAmount'],
              'TI_Onhand' => ($_POST['towelAmount'] + $available),
              'TI_Date' => $date,
              'TI_Time' => $time,
              'TI_Type' => 'Supply',
              'month' => $month,
              'year' => $year

          );
          $insert = $pdo->insert($tblName1,$userData);
          $userData4 = array(
              'TI_Available' => ($available + $_POST['towelAmount']),
              'TI_Borrowed' => $borrowed,
              'TI_Returned' => $returned
          );

          $condition = array('TI_Date' => $date);
          $update1 = $pdo->update($tblName1,$userData4,$condition);



          echo "<script>alert('Towel Successfully Supplied');window.location.href='../Amenities-GymTowels.php';</script>";
        }elseif($activity == 'Laundry'){
          $userData2 = array(
             'TI_Laundry' => $_POST['towelAmount'],
             'TI_Date' => $date,
             'TI_Time' => $time,
             'TI_Type' => 'Laundry',
             'month' => $month,
             'year' => $year
          );

          if($_POST['towelAmount'] <= $returned ){
             $insert = $pdo->insert($tblName1,$userData2);

              $userData3 = array(
             'TI_Available' => $available,
             'TI_Borrowed' => $borrowed,
             'TI_Returned' => ($_POST['towelAmount'] - $returned),
             'TI_Onhand' =>  $available + ($borrowed + $returned) + $laundry
             );

             $condition = array('TI_Date' => $date);
             $update1 = $pdo->update($tblName1,$userData3,$condition);


             echo "<script>alert('Laundry towels Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";

          }else{
            //Towel Laundried is greater than returned towels
             echo "<script>alert('Towel Laundry Failed!');window.location.href='../Amenities-GymTowels.php';</script>";

          }
        }elseif($activity == 'Delivered'){
          $userData2 = array(
             'TI_Delivered' => $_POST['towelAmount'],
             'TI_Date' => $date,
             'TI_Time' => $time,
             'TI_Type' => 'Delivered',
             'month' => $month,
             'year' => $year
          );

          if($_POST['towelAmount'] <= $laundry ){
             $insert = $pdo->insert($tblName1,$userData2);

              $userData3 = array(
             'TI_Available' => ($available + $_POST['towelAmount']),
             'TI_Borrowed' => $borrowed,
             'TI_Returned' => $returned,
             'TI_Laundry' => ($_POST['towelAmount'] - $laundry),
             'TI_Onhand' => $available + ($borrowed + $returned) + $laundry
             );

             $condition = array('TI_Date' => $date);
             $update1 = $pdo->update($tblName1,$userData3,$condition);


             echo "<script>alert('Laundry towels Successfully Saved!');window.location.href='../Amenities-GymTowels.php';</script>";
           }
          else{
             echo "<script>alert('Towel Delivery Failed!');window.location.href='../Amenities-GymTowels.php';</script>";

          }
        }

      }
    }
