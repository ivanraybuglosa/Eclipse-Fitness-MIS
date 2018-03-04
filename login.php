<?php
    require_once('dbConnectLogin.php');
    require_once('dbConnect.php');


 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Eclipse GYM MIS</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->

    <!-- Local Fonts and Icons -->
    <link href="material-design-icons-master/iconfont/material-icons.css" rel="stylesheet"/>

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #000f22;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-6">
                <img src="bg.png" style="width: 100%; height: 100%;">
            </div>
            <div class="col-md-6">
    <div class="login-box login-page" style="background-color: #000f22; text-align:center">
        <div class="logo">
            <a href="login.php" style="color:green;">
                <img src="logo.png" style="width: 80%; height: 80%;"></a>
            <small style="color:#c9fb5d;"><label>FITNESS MANAGEMENT INFORMATION SYSTEM</label></small>
        </div>
        <div class="card">
            <div class="body">
               <?php
                $localhost = "localhost";
           $username = "root";
               $password = "";
               $dbname = "eclipse_db";

               $connect = new mysqli($localhost, $username, $password, $dbname);
                if($connect->connect_error) {
               die("Connection Failed : " . $connect->connect_error);
            } else {

             }
             session_start();
             if(isset($_POST['username'])&& isset($_POST['password'])){
                $sta = $connect->query("SELECT * FROM `users`") or die(mysqli_error());
                 while($check = $sta->fetch_array()){
                    $u = $check['username'];
                    $p = $check['password'];

                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $stmt = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
                $stmt->bindParam(1, $username);
                $stmt->bindParam(2, $password);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $user = $row['username'];
                $pass = $row['password'];
                $id = $row['userID'];
                $type = $row['userType'];
                if($username==$user && $password==$pass){


                    $_SESSION['username'] = $user;
                    $_SESSION['password'] = $pass;
                    $_SESSION['userID'] = $id;
                    $_SESSION['userType'] = $type;
                    $_SESSION['loggedIn'] = TRUE;





                    if($type =="admin"  ){

                        mysqli_query($connect, "UPDATE users SET  stat= '1' WHERE username = '$username' AND password = '$password' ") or die(mysqli_error($connect));
                        ?>
                        <script>alert('Successful Login!');window.location.href='admin/index.php';</script>

                        <?php }elseif ($type == "coach") {  mysqli_query($connect, "UPDATE users SET  stat= '1' WHERE username = '$username' AND password = '$password' ") or die(mysqli_error($connect));?>

                      <script>alert('Successful Login!');window.location.href='coach/index.php';</script>

                        <?php }  elseif($type =="receptionist") {

                            ?>
                              <script>alert('Successful Login!');window.location.href='receptionist/index.php';</script>

                        <?php
                        } elseif($u != $username || $p != $password) { ?>

                        <script>alert('Login Failed!Incorrect information!');window.location.href='login.php';</script>
                <?php     }
                }
            }
        }
                ?>

                <!-- Scripts for expiry checking of membership and personal training -->

                <form id="sign_in" method="POST" >
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 pull-right">
                            <button class="btn btn-block bg-green waves-effect" name="btn-login" type="submit" data-type="success">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <script src="assets/js/pages/ui/dialogs.js"></script>

    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>
