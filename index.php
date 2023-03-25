<?php
session_start();
require('connection.php');
$id=$_SESSION['id_session'];
if ($id==false) {
    header("location:login-page.php");
}
?>




<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
            <?php include_once"includes/header_Navbar.php"; ?>
            <!-- End Navbar Area -->
            
            <!-- Start Sidemenu Area -->
            <?php include_once"includes/Sidemenu.php"; ?>
            <!-- End Sidemenu Area -->
            
            <!-- Start Content Page Box Area -->
            <div class="content-page-box-area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <aside class="widget-area">
                            <!-- Start view-profile -->
                            <?php include_once"includes/view-profile.php";  ?>
                            <!-- end view-profile -->
                            <!--  start whatch video -->
                            <?php include_once"includes/watch-video.php"; ?>
                            <!--  end whatch video -->     
                            <div class="widget widget-advertisement">
                                <h3 class="widget-title">Advertisement</h3>

                                <div class="advertisement-image">
                                    <a href="#"><img src="assets/images/advertisement.jpg" alt="image"></a>
                                </div>
                            </div>
                           
                        </aside>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="news-feed-area">
                            
                        <!--  start create post   -->
                            <?php include_once'includes/create_post_page.php';   ?>                            
                        <!--  start create post   -->
                        
                        <!--  start create post   -->
                            <?php include_once'includes/showpost.php';   ?>                            
                        <!--  end create post   -->
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <aside class="widget-area">
                            
                            
                            <div class="widget widget-explore-events">
                                <h3 class="widget-title">Explore Events</h3>

                                <article class="item">
                                    <a href="#"><img src="assets/images/explore-events/explore-1.jpg" alt="image"></a>
                                </article>
                                <article class="item">
                                    <a href="#"><img src="assets/images/explore-events/explore-2.jpg" alt="image"></a>
                                </article>
                            </div>
                            <!-- whos following  -->
                            <?php include_once"includes/who_S_Following.php"; ?>
                            <!-- end whos following  -->
                        </aside>
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
                    <p><i class="ri-copyright-line"></i> 2021 Zust. All Rights Reserved by <a href="https://mounireHM.com/" target="_blank">monirehamli</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        <!-- Links of JS files -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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