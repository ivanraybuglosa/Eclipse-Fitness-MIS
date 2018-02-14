
<?php
session_start();
include '../../dbConnect.php';
$pdo = new dbConnect();

$table1 = 'transaction';



  //working
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'checkout'){ 
        $userData = array(
            'TR_f' => $_POST['check'],
            
        );

        $condition = array('CLIENT_ID' => $_POST['CLIENT_ID']);
        $update1 = $pdo->update($table1,$userData,$condition);
        $statusMsg = $insert?'Studio Class data has been inserted successfully.':'Some problem occurred, please try again.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:../Client-Transaction.php");

    }
}

 