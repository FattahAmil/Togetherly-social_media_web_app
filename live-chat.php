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
           <?php include_once"includes/header_Navbar.php"; ?>
            <!-- End Navbar Area -->
            
            <!-- Start Sidemenu Area -->
            <?php include_once"includes/Sidemenu.php"; ?>
            <!-- End Sidemenu Area -->
            
            <!-- Start Content Page Box Area -->
            <div class="content-page-box-area">
                <div class="page-banner-box bg-8">
                    <h3>Live Chat</h3>
                </div>
                
                <div class="live-chat-slides owl-carousel owl-theme">
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">James</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-59.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Debra</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-60.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Adelina</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-23.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Miguel</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-35.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Xavier</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-22.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Kimberly</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-25.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Turner</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-39.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Ferrier</a>
                        </h3>
                    </div>
                    <div class="chat-box">
                        <div class="image">
                            <a href="#"><img src="assets/images/user/user-33.jpg" class="rounded-circle" alt="image"></a>
                            <span class="status-online"></span>
                        </div>
                        <h3>
                            <a href="#">Reggie</a>
                        </h3>
                    </div>
                </div>

                <div class="live-chat-body">
                    <div class="live-chat-header d-flex justify-content-between align-items-center">
                        <div class="live-chat-info">
                            <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                            <h3>
                                <a href="#">James Vanwin</a>
                            </h3>
                        </div>

                        <ul class="live-chat-right">
                            <li>
                                <button class="btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Phone" type="button"><i class="ri-phone-fill"></i></button>
                            </li>
                            <li>
                                <button class="btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Live" type="button"><i class="ri-live-fill"></i></button>
                            </li>
                            <li>
                                <button class="btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-delete-bin-line"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="live-chat-container">
                        <div class="chat-content">
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-11.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Hello, dear I want talk to you?</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-2.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Said how can I cooperate with you?</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-3.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>I need some ideas from you about my design</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-4.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>What you want to know about design</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-5.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>With everything I know about design, I can help you in many ways</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-6.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>Ok, I'm taking note I'm telling you everything I need</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-7.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>I am waiting for your note</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a routerLink="/profile" class="d-inline-block">
                                        <img src="assets/images/user/user-8.jpg" width="50" height="50" class="rounded-circle" alt="image">
                                    </a>
                                </div>

                                <div class="chat-body">
                                    <div class="chat-message">
                                        <p>What makes you different from other learning platforms?</p>
                                        <span class="time d-block">7:45 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chat-list-footer">
                            <form class="d-flex align-items-center">
                                <div class="btn-box d-flex align-items-center me-3">
                                    <button class="file-attachment-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="File Attachment" type="button"><i class="ri-attachment-2"></i></button>

                                    <button class="emoji-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Emoji" type="button"><i class="ri-user-smile-line"></i></button>
                                </div>
    
                                <input type="text" class="form-control" placeholder="Type your message...">
    
                                <button type="submit" class="send-btn d-inline-block">Send</button>
                            </form>
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