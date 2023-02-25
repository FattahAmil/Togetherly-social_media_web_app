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
                <div class="page-banner-box bg-10">
                    <h3>Video</h3>
                </div>
                
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Ana Romero</a>
                                    </h3>
                                    <span>Published: 10 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-1.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-7.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Easter Guidry</a>
                                    </h3>
                                    <span>Published: 05 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-2.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-54.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Alicia Woolard</a>
                                    </h3>
                                    <span>Published: 04 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-3.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-55.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">James Vanwin</a>
                                    </h3>
                                    <span>Published: 10 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-4.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Christopher Wick</a>
                                    </h3>
                                    <span>Published: 01 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-5.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-22.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Lawrence Morse</a>
                                    </h3>
                                    <span>Published: 21 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-6.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-45.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Maynard James</a>
                                    </h3>
                                    <span>Published: 25 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-7.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-15.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Roberto Jones</a>
                                    </h3>
                                    <span>Published: 17 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-8.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-48.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">William Dickerson</a>
                                    </h3>
                                    <span>Published: 10 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-9.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-44.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Gilbert Ritchie</a>
                                    </h3>
                                    <span>Published: 01 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-10.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-27.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Corey Kelly</a>
                                    </h3>
                                    <span>Published: 25 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-11.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-video-card">
                            <div class="video-info">
                                <a href="#"><img src="assets/images/user/user-51.jpg" class="rounded-circle" alt="image"></a>
                                <div class="text">
                                    <h3>
                                        <a href="#">Carley Nickle</a>
                                    </h3>
                                    <span>Published: 15 July, 2021</span>
                                </div>
                            </div>
                            <div class="video-image">
                                <img src="assets/images/video/video-12.jpg" alt="image">

                                <div class="icon">
                                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                        <i class="flaticon-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="meta-wrap">
                                <li class="react">
                                    <a href="#"><i class="ri-heart-line"></i><span>15</span></a>
                                </li>
                                <li class="comment">
                                    <a href="#"><i class="ri-chat-3-line"></i><span>0</span></a>
                                </li>
                                <li class="share">
                                    <a href="#"><i class="ri-share-line"></i><span>0</span></a>
                                </li>
                            </ul>
                            <form class="video-form">
                                <input type="text" class="input-search" placeholder="Write comment">
                                <button type="submit"><i class="ri-send-plane-line"></i></button>
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