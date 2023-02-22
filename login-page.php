<?php
session_start();
include('connection.php');
if (isset($_POST['submit'])) {
if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email=$_POST['email'];
    $pass=$_POST['password'];
$req = $conn->prepare('SELECT * FROM users WHERE email_user = ? AND pass_user = ? ');
$req->execute(array($email,$pass));
$controle=$req->fetch();
if ($controle) {
    $id=$controle['id_user'];
  $_SESSION['id_session']=$id;
  header("location:index.php");
  exit;
}
}
    echo' <div style="background-color: #ffaaaa;
    border-radius: 5px;
    width: 75%;
    padding: 9px;
    margin: 5px;
    ">
    
    <strong>Warning!</strong> your password or your email is incorrect.
  </div>';
}
?>
<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/simplebar.min.css">
        <link rel="stylesheet" href="assets/css/metismenu.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<title>Zust - Social Community & Marketplace HTML Template</title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->
        
        <!-- Start Preloader Area -->
        <div class="profile-authentication-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="profile-authentication-image">
                            <div class="content-image">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo.png" alt="Zust"></a>
                                </div>
                                <div class="vector-image">
                                    <img src="assets/images/vector.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6 col-md-12">
                        <div class="login-form">
                            <h2>Login</h2>
        
                            <form  method="POST" action="action/login.php" >
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
        
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
        
                                <div class="remember-me-wrap d-flex justify-content-between align-items-center">
                                    <p>
                                        <input type="checkbox" id="test1">
                                        <label for="test1">Remember me</label>
                                    </p>
        
                                    <div class="lost-your-password-wrap">
                                        <a href="forgot-password.html" class="lost-your-password">Forgot password ?</a>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="default-btn">Login</button>
                                <div class="or-text"><span>Or</span></div>
                                <button type="submit" class="google-btn">Log In with Google</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-btn-icon">
                <a href="index.html"><i class="flaticon-home"></i></a>
            </div>
        </div>
        <!-- End Preloader Area -->
        
        <!-- Links of JS files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>