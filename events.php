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
            <div class="sidemenu-area">
                <div class="responsive-burger-menu d-lg-none d-block">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>

                <div class="sidemenu-body">
                    <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">
                                <span class="icon"><i class="flaticon-newspaper"></i></span>
                                <span class="menu-title">News Feed</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="notifications.html" class="nav-link">
                                <span class="icon"><i class="flaticon-bell"></i></span>
                                <span class="menu-title">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="messages.html" class="nav-link">
                                <span class="icon"><i class="flaticon-comment-1"></i></span>
                                <span class="menu-title">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="friends.html" class="nav-link">
                                <span class="icon"><i class="flaticon-friends"></i></span>
                                <span class="menu-title">Friends</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="groups.html" class="nav-link">
                                <span class="icon"><i class="flaticon-team"></i></span>
                                <span class="menu-title">Groups</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="favorite.html" class="nav-link">
                                <span class="icon"><i class="flaticon-star"></i></span>
                                <span class="menu-title">Favorite</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="events.php" class="nav-link">
                                <span class="icon"><i class="flaticon-calendar"></i></span>
                                <span class="menu-title">Events</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="live-chat.html" class="nav-link">
                                <span class="icon"><i class="flaticon-live-chat"></i></span>
                                <span class="menu-title">Live Chat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="birthday.html" class="nav-link">
                                <span class="icon"><i class="flaticon-cake"></i></span>
                                <span class="menu-title">Birthday</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="video.html" class="nav-link">
                                <span class="icon"><i class="flaticon-video"></i></span>
                                <span class="menu-title">Video</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="weather.html" class="nav-link">
                                <span class="icon"><i class="flaticon-cloudy"></i></span>
                                <span class="menu-title">Weather</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="marketplace.html" class="nav-link">
                                <span class="icon"><i class="flaticon-online-shopping"></i></span>
                                <span class="menu-title">Marketplace</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="login.html" class="nav-link">
                                <span class="icon"><i class="flaticon-user"></i></span>
                                <span class="menu-title">Login</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="register.html" class="nav-link">
                                <span class="icon"><i class="flaticon-information"></i></span>
                                <span class="menu-title">Register</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Sidemenu Area -->
            
            <!-- Start Content Page Box Area -->
            <div class="content-page-box-area">
                <div class="page-banner-box bg-7">
                    <h3>Events</h3>
                </div>

                <div class="events-inner-box-style d-flex justify-content-between align-items-center">
                    <div class="title">
                        <h3>All Events</h3>
                    </div>
                    <div class="events-btn">
                        <a href="#" class="default-btn">Add New Event</a>
                    </div>
                    <div class="events-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search events...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-1.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>12:30PM to 02:30PM</span>
                                <h3>
                                    <a href="#">Digital Marketing</a>
                                </h3>
                                <p>Online</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>July 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-2.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>02:30PM to 04:30PM</span>
                                <h3>
                                    <a href="#">Dance Conference</a>
                                </h3>
                                <p>Online</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>August 06, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-3.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>12:30PM to 02:30PM</span>
                                <h3>
                                    <a href="#">Food Festival</a>
                                </h3>
                                <p>1157 Anmoore Road New York, NY</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>July 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-4.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>12:30PM to 02:30PM</span>
                                <h3>
                                    <a href="#">Film Festival</a>
                                </h3>
                                <p>2611 Deer Ridge Drive Newark, NJ</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>August 13, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-5.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>03:30PM to 05:30PM</span>
                                <h3>
                                    <a href="#">Language Festival</a>
                                </h3>
                                <p>Online</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>August 20, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-6.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>05:30PM to 07:30PM</span>
                                <h3>
                                    <a href="#">Business Conference</a>
                                </h3>
                                <p>1535 Point Street Chicago, IL</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>August 27, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-7.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>02:30PM to 04:30PM</span>
                                <h3>
                                    <a href="#">Shopping Conference</a>
                                </h3>
                                <p>Online</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>July 30, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-events-card">
                            <a href="#">
                                <img src="assets/images/events/events-8.jpg" alt="image">
                            </a>
                            <div class="events-content">
                                <span>12:30PM to 02:30PM</span>
                                <h3>
                                    <a href="#">Music Party</a>
                                </h3>
                                <p>2428 Terra Street Seattle, WA</p>

                                <div class="events-footer d-flex justify-content-between align-items-center">
                                    <a href="#" class="default-btn">Attend</a>
                                    <span>September 03, 2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="events-form">
                    <h3>Add New Event</h3>

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-select">
                                    <option selected="1">Digital Marketing</option>
                                    <option value="2">Language Festival</option>
                                    <option value="3">Business Conference</option>
                                    <option value="4">en ligne Conference</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Event Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Event Location</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Event Date</label>
                                <input type="text" class="form-control" id="datepicker">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>End Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Event Description</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Created Event</button>
                        </div>
                    </div>
                </form>
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