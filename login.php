<?php
    require_once('dbConnectLogin.php');
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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

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

<body class="login-page" style="background-color: #2E2E2E;">
    <div class="login-box">
        <div class="logo">
            <a href="login.php" style="color:green;"><img src="eclipse_logo.png" style="width: 80%; height: 80%;"></a>
            <small style="color:green;"><label>FITNESS MANAGEMENT INFORMATION SYSTEM</label></small>
        </div>
        <div class="card">
            <div class="body">
               <?php

                    if(isset($_POST['username'])&& isset($_POST['password'])){
                        
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
                            session_start();
                            $_SESSION['username'] = $user;
                            $_SESSION['password'] = $pass;
                            $_SESSION['userID'] = $id;
                            $_SESSION['userType'] = $type;
                                if($type =="admin"){ ?>
                                    <script> window.location.href="admin/index.php"</script>
                                    <?php } 
                                        else($type =="coach") 
                                    ?>
                                <script> window.location.href="coach/index.php"</script>
                        <?php 
                        } else { ?>
                        <script>

                        window.location.href="login.php"</script>
                <?php     }
                } 
                ?>
                <form id="sign_in" method="POST">
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