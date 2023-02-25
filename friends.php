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
                <div class="page-banner-box bg-4">
                    <h3>Friends</h3>
                </div>

                <div class="friends-inner-box-style d-flex justify-content-between align-items-center margin-top-25">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="friend-requests-tab" data-bs-toggle="tab" href="#friend-requests" role="tab" aria-controls="friend-requests">Friend Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="people-you-know-tab" data-bs-toggle="tab" href="#people-you-know" role="tab" aria-controls="people-you-know">People You Know</a>
                        </li>
                    </ul>
                    
                    <div class="friends-search-box">
                        <form>
                            <input type="text" class="input-search" placeholder="Search friends...">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="friend-requests" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-1.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-1.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-2.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-2.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-3.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-3.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-4.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-4.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-5.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-5.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-6.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-6.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-7.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-7.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-8.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-8.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-9.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-9.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-10.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-10.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-11.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-11.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-12.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-12.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-13.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-13.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-14.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-14.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-15.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-15.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-16.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/friends/friends-16.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="people-you-know" role="tabpanel">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-1.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-10.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Jose Marroquin</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">862</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">91</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">514</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-2.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-11.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Myrtle Lewis</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">82</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">50</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">314</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-3.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-12.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Howard Tam</a></h3>
                                                <span>19 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">452</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">120</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">328</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-4.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-13.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Kimberly Blum</a></h3>
                                                <span>18 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">685</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">16</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">675</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-5.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-14.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mary Mercado</a></h3>
                                                <span>10 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">687</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">152</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">657</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-6.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-15.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Robert Ward</a></h3>
                                                <span>22 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">156</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">73</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">642</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-7.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-16.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Pauline Hughes</a></h3>
                                                <span>26 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-8.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-17.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Brad Snowden</a></h3>
                                                <span>30 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">383</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-9.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-18.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Mark S. Perry</a></h3>
                                                <span>33 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">165</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-10.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-19.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Josefina Wells</a></h3>
                                                <span>45 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">965</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-11.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-20.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Richard Smith</a></h3>
                                                <span>65 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">483</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">241</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">865</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-12.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-21.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Alma Smith</a></h3>
                                                <span>61 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">783</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">541</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-13.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-22.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Bessie Smith</a></h3>
                                                <span>24 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">183</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">441</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">765</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-14.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-23.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Anthony Hogg</a></h3>
                                                <span>75 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">841</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">365</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-15.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-24.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Shel Williams</a></h3>
                                                <span>25 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">583</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">941</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">265</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-friends-card">
                                    <div class="friends-image">
                                        <a href="#">
                                            <img src="assets/images/friends/friends-bg-16.jpg" alt="image">
                                        </a>
                                        <div class="icon">
                                            <a href="#"><i class="flaticon-user"></i></a>
                                        </div>
                                    </div>
                                    <div class="friends-content">
                                        <div class="friends-info d-flex justify-content-between align-items-center">
                                            <a href="#">
                                                <img src="assets/images/user/user-25.jpg" alt="image">
                                            </a>
                                            <div class="text ms-3">
                                                <h3><a href="#">Carol Miller</a></h3>
                                                <span>20 Mutual Friends</span>
                                            </div>
                                        </div>
                                        <ul class="statistics">
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">683</span> 
                                                    <span class="item-text">Likes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">341</span> 
                                                    <span class="item-text">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="item-number">565</span> 
                                                    <span class="item-text">Followers</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="button-group d-flex justify-content-between align-items-center">
                                            <div class="add-friend-btn">
                                                <button type="submit">Add Friend</button>
                                            </div>
                                            <div class="send-message-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="load-more-posts-btn">
                            <a href="#"><i class="flaticon-loading"></i> Load More</a>
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