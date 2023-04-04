<?php
session_start();
require('connection.php');
$id=$_SESSION['id_session'];
if ($id==false) {
    header("location:login.php");
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
        
        <!-- Start Main Content Wrapper Area -->
        <div class="main-content-wrapper d-flex flex-column">

            <!-- Start Navbar Area -->
            <?php include_once"./header_Navbar.php"; ?>
            <!-- End Navbar Area -->
            
            <!-- Start Sidemenu Area -->
            <?php include_once"includes/Sidemenu.php"; ?>
            <!-- End Sidemenu Area -->
            
            <!-- Start Content Page Box Area -->
            <div class="content-page-box-area">
                <div class="all-notifications-body">
                    <div class="all-notifications-header d-flex justify-content-between align-items-center">
                        <h3>Notifications</h3>
                        
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Notifications</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Notifications</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Notifications</a></li>
                            </ul>
                        </div>
                    </div>
                        <div class="item d-flex justify-content-between align-items-center">
                            <div class="figure">
                                <a href="<?php  echo 'profile.php?id='.$user['id_user'];?>">
                                <img src="<?php echo $user['imgprfl_user']; ?>" class="rounded-circle" alt="image" style="width:50px;height:50px;"></a>
                            </div>
                            <div class="text">
                                <h4><a href="my-profile.html">James Vanwin</a></h4>
                                <span>Posted A Comment On Your Status</span>
                                <span class="main-color">20 Minites Ago</span>
                            </div>
                            <div class="icon">
                                <a href="#"><i class="flaticon-x-mark"></i></a>
                            </div>
                        </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-45.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Dwight Schoolcraft</a></h4>
                            <span>Sent You a Friend Request</span>
                            <span class="main-color">35 Minites Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-48.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Susan Hadden</a></h4>
                            <span>Add a Photo in Design Group</span>
                            <span class="main-color">50 Minites Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-49.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Herta Smith</a></h4>
                            <span>Posted in Graphic Design Learn</span>
                            <span class="main-color">1 Hours Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-50.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Francis L. Tay</a></h4>
                            <span>Like Your Comment</span>
                            <span class="main-color">5 Hours Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-51.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Laura Hildebrandt</a></h4>
                            <span>Comment On Your Status</span>
                            <span class="main-color">1 Days Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-52.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Martha Wilkes</a></h4>
                            <span>Reacted To Your Comment "Happy Birthday"</span>
                            <span class="main-color">3 Days Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-53.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Howard Harris</a></h4>
                            <span>Added a Photo in Graphic Design Group</span>
                            <span class="main-color">7 Days Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-54.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">Martha Wilkes</a></h4>
                            <span>Added a Photo in Graphic Design Group</span>
                            <span class="main-color">7 Days Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between align-items-center">
                        <div class="figure">
                            <a href="my-profile.html"><img src="assets/images/user/user-30.jpg" class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="text">
                            <h4><a href="my-profile.html">David Gibson</a></h4>
                            <span>Commented on Your Newstatus</span>
                            <span class="main-color">1 Month Ago</span>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="flaticon-x-mark"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Page Box Area -->

            <!-- Start Right Sidebar Area -->
            <div class="right-sidebar-area" data-simplebar>
                <div class="recent-chat-box">
                    <div class="title">
                        <h3>Recent Chat</h3>
                    </div>

                    <div class="chat-body" data-simplebar>
                        <div class="chat-item">
                            <a href="#"><img src="assets/images/user/user-15.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Stephan Redding</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="chat-item">
                            <a href="#"><img src="assets/images/user/user-16.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Maria Smith</a></span>
                            <span class="status-offline"></span>
                        </div>
                        <div class="chat-item">
                            <a href="#"><img src="assets/images/user/user-17.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Paul Enlow</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="chat-item">
                            <a href="#"><img src="assets/images/user/user-8.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Stephan Redding</a></span>
                            <span class="status-offline"></span>
                        </div>
                        <div class="chat-item">
                            <a href="#"><img src="assets/images/user/user-9.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Maria Smith</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="chat-item">
                            <a href="#"><img src="assets/images/user/user-10.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Paul Enlow</a></span>
                            <span class="status-offline"></span>
                        </div>
                    </div>
                </div>
                
                <div class="recent-contact-box">
                    <div class="title">
                        <h3>Contact</h3>
                    </div>
                    <div class="contact-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                    <div class="contact-body" data-simplebar>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-18.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Karen Williams</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-4.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Mary A. Schwarz</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-20.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Rex Carruth</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">James Vanwinkle</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-19.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Oscar Thompson</a></span>
                            <span class="status-offline"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Harry Lopez</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-21.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Frank S. Arena</a></span>
                            <span class="status-offline"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-16.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Karen Williams</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Mary A. Schwarz</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Rex Carruth</a></span>
                            <span class="status-offline"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-18.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">James Vanwinkle</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Oscar Thompson</a></span>
                            <span class="status-offline"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-6.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Harry Lopez</a></span>
                            <span class="status-online"></span>
                        </div>
                        <div class="contact-item">
                            <a href="#"><img src="assets/images/user/user-7.jpg" class="rounded-circle" alt="image"></a>
                            <span class="name"><a href="#">Frank S. Arena</a></span>
                            <span class="status-offline"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Right Sidebar Area -->

        </div>
        <!-- End Main Content Wrapper Area -->
        
        <!-- Start Copyright Area -->
        <div class="copyrights-area">
            <div class="container">
                <div class="row align-items-center">
                    <p><i class="ri-copyright-line"></i> 2021 Zust. All Rights Reserved by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->
        
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