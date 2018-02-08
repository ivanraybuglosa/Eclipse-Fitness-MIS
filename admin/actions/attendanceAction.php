
<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$tblName1 = 'attendance';
$tblName2 = 'client';
$tableName3='transaction';
$tableName4 ='towels';
$tableTowel = 'towelinventory';

$firstname = 'CLIENT_FirstName';
$lastname = 'CLIENT_LastName';
$fullname = $firstname. " " .$lastname;
$column1 = $fullname;
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));
$date = date("Y-m-d");
$time=date("H:i:s", strtotime("+7 HOURS"));



  //working
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){ 
        $regstat = $pdo->regStat($_POST['clientName']);
            $userData = array(
            'CLIENT_ID' => $_POST['clientName'],
            'A_TowelQty' => $_POST['towel'],
            'A_LockerKey' => $_POST['Locker'],
            'A_TimeIn' => $time,
            'A_Year' => $year,
            'A_Month' => $month,
            'A_Date' => $date,
            'A_status' => $regstat
            );
         

        // $expiry = $pdo->memExpire($_POST['clientName']);
        // $date1 = date_create(date("Y-m-d"));
        // $date2 = date_create($expiry);
        // $days = date_diff($date1,$date2);
        // $day = date("a", strtotime($day));
        


            $locker = $pdo->locker($date,$_POST['Locker']);
            $check = $pdo->checkAttendance($_POST['clientName'],$date);
       
            if( 5 < 4){
                $available = $pdo->previousAvailable();
                    $borrowed = $pdo->previousBorrowed();
                    $userData3 = array(
                        'TI_Borrowed' => ($_POST['towel'] + $borrowed),
                        'TI_Available' => ($available - $_POST['towel'])
                    );

                if($_POST['towel'] <= $available){
                    $insert = $pdo->insert($tblName1,$userData);
                    $id = $_POST['clientName'];
                     echo "<script>alert('Client Time-in Success! Client Membership will expire in 3 days!'));window.location.href='../Client-Profile-User1.php?id='".$id."';</script>";
                    // echo "
                    //         <script src='../assets/plugins/jquery/jquery.min.js'></script>
                    //         <link href='../assets/plugins/sweetalert/sweetalert.css' rel='stylesheet' />
                    //         <script src='../assets/plugins/sweetalert/sweetalert.min.js'></script>
                    // <script>
                    //         $(document).ready(function() {
                    //             swal({'Good job!','You clicked the button!','success'},
                    //                     function(){
                    //                     window.location.href = '../attendance.php'
                    //                 });</script>";
                    
                    
                    $condition = array("TI_Available" => $available);
                    $update = $pdo->update($tableTowel,$userData3,$condition);
                }else{
                    echo "<script>alert('Client time-in Failed! Insufficient towels!');window.location.href='../attendance.php';</script>";
                }
                
                

            
            
        $price = $pdo->penaltyPrice('Walk-in');
        
        
        $userData2 = array(
            'CLIENT_ID' => $_POST['clientName'],
            'TR_Type' => 'Walk-in',
            'TR_Bill' => $price,
            'TR_Status' => 'unpaid',
            'TR_TransactionDate' => $date,
            'year' => $year,
            'month' => $month
        );
        if($regstat == "Walk-in"){
            $insert1= $pdo->insert($tableName3,$userData2);
            
        }else{

        } 
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        // header("Location:../attendance.php");



        }elseif(($check <> $_POST['clientName'] || empty($check)) && ($locker <> $_POST['Locker'] || empty($locker)))  {
            
                $available = $pdo->previousAvailable();
                $borrowed = $pdo->previousBorrowed();
                $userData3 = array(
                    'TI_Borrowed' => ($_POST['towel'] + $borrowed),
                    'TI_Available' => ($available - $_POST['towel'])
                );

                if($_POST['towel'] <= $available){
                    $insert = $pdo->insert($tblName1,$userData);
                     echo "<script>alert('Client Time-in Success! ');window.location.href='../attendance.php';</script>";
                    // echo "
                    //         <script src='../assets/plugins/jquery/jquery.min.js'></script>
                    //         <link href='../assets/plugins/sweetalert/sweetalert.css' rel='stylesheet' />
                    //         <script src='../assets/plugins/sweetalert/sweetalert.min.js'></script>
                    // <script>
                    //         $(document).ready(function() {
                    //             swal({'Good job!','You clicked the button!','success'},
                    //                     function(){
                    //                     window.location.href = '../attendance.php'
                    //                 });</script>";
                    
                    
                    $condition = array("TI_Available" => $available);
                    $update = $pdo->update($tableTowel,$userData3,$condition);
                }else{
                    echo "<script>alert('Client time-in Failed! Insufficient towels!');window.location.href='../attendance.php';</script>";
                }
                
                

            
            
        $price = $pdo->penaltyPrice('Walk-in');
        
        
        $userData2 = array(
            'CLIENT_ID' => $_POST['clientName'],
            'TR_Type' => 'Walk-in',
            'TR_Bill' => $price,
            'TR_Status' => 'unpaid',
            'TR_TransactionDate' => $date,
            'year' => $year,
            'month' => $month
        );
        if($regstat == "Walk-in"){
            $insert1= $pdo->insert($tableName3,$userData2);
            
        }else{

        } 
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        // header("Location:../attendance.php");


    


    }else{
        
        echo "<script>alert('Client Time-in Failed!');window.location.href='../attendance.php';</script>";
         $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
    }
        
        //working
    }elseif($_REQUEST['action_type'] == 'edit'){
            $userData = array(
            'A_TowelQty' => $_POST['modifiedTowel'],
            'A_LockerKey' => $_POST['modifiedLocker']
            );
            $locker = $pdo->locker($date,$_POST['modifiedLocker']);
            if($locker <> $_POST['modifiedLocker']){
                $condition = array('A_Code' => $_POST['A_Code']);
                $update = $pdo->update($tblName1,$userData,$condition);
           
                echo "<script>alert('Client Attendance Information Successfully Modified!');window.location.href='../attendance.php';</script>";
                
            }else{
                echo "<script>alert('Client Attendance Information Modification Failed!');window.location.href='../attendance.php';</script>";
               
            }

            
        //working
    }elseif($_REQUEST['action_type'] == 'out'){ 
        $userData = array(
            'A_TimeOut' => $time,
            'A_TowelReturn' => $_POST['returnedTowel'],
            'A_ReturnedKey' => $_POST['key']
        );

        $borrowed = $pdo->previousBorrowed();
        $returned = $pdo->getReturned();
        $userData4 = array(
            'TI_Returned' => ($_POST['returnedTowel'] + $returned),
            'TI_Borrowed' => ($borrowed - $_POST['returnedTowel'])

        );


        $towels = $pdo->checkTowels($_POST['A_Code']);
        if($towels <> $_POST['returnedTowel'] || $_POST['key'] == 'Unreturned'){
            $lostQty = $towels - $_POST['returnedTowel'];
            $penaltyPrice = $pdo->penaltyPrice('Lost Towel(s)');
                $userData1 = array(
                'CLIENT_ID' => $_POST['CLIENT_ID'],
                'TR_Type' => 'Lost Towel(s) ',
                'TR_Bill' => $penaltyPrice * $lostQty,
                'TR_Status' => 'unpaid',
                'TR_TransactionDate' => $date,
                'year' => $year,
                'month' => $month
                );

                $fee = $pdo->penaltyPrice('Lost Locker Key');
                $userData5 = array(
                    'CLIENT_ID' => $_POST['CLIENT_ID'],
                    'TR_Type' => 'Lost Locker Key',
                    'TR_Bill' => $fee,
                    'TR_Status' => 'unpaid',
                    'TR_TransactionDate' => $date,
                    'year' => $year,
                    'month' => $month
                );
            $condition = array('A_Code' => $_POST['A_Code']);
                $update = $pdo->update($tblName1,$userData,$condition);
           
         $insert = $pdo->insert($tableName3, $userData1);
         $insert = $pdo->insert($tableName3, $userData5);
         echo "<script>alert('Client charged for a penalty. Client Successfully Timed-out. ');window.location.href='../attendance.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;
        }else{





        $condition2 = array('TI_Date' => $date);
        $update4 = $pdo->update($tableTowel,$userData4,$condition2);
            

        $condition1 = array('A_Code' => $_POST['A_Code']);
        $update1 = $pdo->update($tblName1,$userData,$condition1);
        
        echo "<script>alert('Client Successfully timed-out');window.location.href='../attendance.php';</script>";
         $statusMsg = $update?'User data has been updated successfully.':'Some problem occurred, please try again.';
            $_SESSION['statusMsg'] = $statusMsg;

        }
        

    }
}

 