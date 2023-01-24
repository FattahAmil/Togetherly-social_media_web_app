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
                        <li class="nav-item">
                            <a href="events.html" class="nav-link">
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
                <div class="my-profile-inner-box">
                    <div class="profile-cover-image">
                        <a href="#">
                            <img src="assets/images/my-profile-bg.jpg" alt="image">
                        </a>
                        <a href="#" class="edit-cover-btn">Edit Cover</a>
                    </div>

                    <div class="profile-info-box">
                        <div class="inner-info-box d-flex justify-content-between align-items-center">
                            <div class="info-image">
                                <a href="#">
                                    <img src="assets/images/my-profile.jpg" alt="image">
                                </a>
                                <div class="icon">
                                    <a href="#"><i class="flaticon-photo-camera"></i></a>
                                </div>
                            </div>
                            <div class="info-text ms-3">
                                <h3><a href="#">Matthew Turner</a></h3>
                                <span><a href="mailto:matthew@gmail.com">matthew@gmail.com</a></span>
                            </div>
                            <ul class="statistics">
                                <li>
                                    <a href="#">
                                        <span class="item-number">59862</span> 
                                        <span class="item-text">Likes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="item-number">8591</span> 
                                        <span class="item-text">Following</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="item-number">784514</span> 
                                        <span class="item-text">Followers</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="profile-list-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="timeline-tab" data-bs-toggle="tab" href="#timeline" role="tab" aria-controls="timeline">Timeline</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about">About</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link" id="friends-tab" data-bs-toggle="tab" href="#friends" role="tab" aria-controls="friends">Friends</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link" id="photos-tab" data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos">Photos</a>
                                </li>
                            </ul>
                        </div>

                        <ul class="profile-social">
                            <li>
                                <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                    <img src="assets/images/social/facebook.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <img src="assets/images/social/twitter.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <img src="assets/images/social/pinterest.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <img src="assets/images/social/linkedin.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="assets/images/social/instagram.png" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <aside class="widget-area">
                                    <div class="widget widget-suggested-groups">
                                        <h3 class="widget-title">Suggested Groups</h3>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg1" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">UX/UI Design Group</a>
                                                </h4>
                                                <span>5000+ Members</span>
                                                <a href="#" class="join-btn">Join Community</a>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg2" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Job Search Group</a>
                                                </h4>
                                                <span>5000+ Members</span>
                                                <a href="#" class="join-btn">Join Community</a>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg3" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Photography Group</a>
                                                </h4>
                                                <span>5000+ Members</span>
                                                <a href="#" class="join-btn">Join Community</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="widget widget-advertisement">
                                        <h3 class="widget-title">Advertisement</h3>
        
                                        <div class="advertisement-image">
                                            <a href="#"><img src="assets/images/advertisement.jpg" alt="image"></a>
                                        </div>
                                    </div>
                                    <div class="widget widget-page-you-like">
                                        <h3 class="widget-title">Page You Like</h3>
        
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg1" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Graphic Design</a>
                                                </h4>
                                                <span>1215 Members</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg2" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Digital Marketing</a>
                                                </h4>
                                                <span>1865 Members</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg3" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Fitness Club</a>
                                                </h4>
                                                <span>2051 Members</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg4" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Dream Restaurant</a>
                                                </h4>
                                                <span>5214 Members</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg5" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Travel Life</a>
                                                </h4>
                                                <span>9589 Members</span>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="widget widget-watch-video">
                                        <h3 class="widget-title">Watch Video</h3>
                                
                                        <div class="watch-video-slides owl-carousel owl-theme">
                                            <div class="video-item">
                                                <img src="assets/images/watch-video/video-1.jpg" alt="image">
        
                                                <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                                    <i class="ri-play-fill"></i>
                                                </a>
                                            </div>
                                            <div class="video-item">
                                                <img src="assets/images/watch-video/video-2.jpg" alt="image">
        
                                                <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                                    <i class="ri-play-fill"></i>
                                                </a>
                                            </div>
                                            <div class="video-item">
                                                <img src="assets/images/watch-video/video-3.jpg" alt="image">
        
                                                <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                                                    <i class="ri-play-fill"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            
                            <div class="col-lg-6 col-md-12">
                                <div class="news-feed-area">
                                    <div class="news-feed news-feed-form">
                                        <h3 class="news-feed-title">Create New Post</h3>
        
                                        <form>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Write something here..."></textarea>
                                            </div>
                                            <ul class="button-group d-flex justify-content-between align-items-center">
                                                <li class="photo-btn">
                                                    <button type="submit"><i class="flaticon-gallery"></i> Photo</button>
                                                </li>
                                                <li class="video-btn">
                                                    <button type="submit"><i class="flaticon-video"></i> Video</button>
                                                </li>
                                                <li class="tag-btn">
                                                    <button type="submit"><i class="flaticon-tag"></i> Tag Friends</button>
                                                </li>
                                                <li class="post-btn">
                                                    <button type="submit">Post</button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
        
                                    <div class="news-feed news-feed-stories">
                                        <div class="stories-title d-flex justify-content-between align-items-center">
                                            <h3>Stories</h3>
                                            <span><a href="#">See All</a></span>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-4 col-4">
                                                <div class="stories-item">
                                                    <div class="stories-image">
                                                        <a href="#">
                                                            <img src="assets/images/user/user-1.jpg" alt="image">
                                                        </a>
                                                        <div class="add-icon">
                                                            <a href="#"><i class="flaticon-add"></i></a>
                                                        </div>
                                                    </div>
                                                    <span><a href="#">Add Story</a></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-4">
                                                <div class="stories-item">
                                                    <a href="#">
                                                        <img src="assets/images/user/user-28.jpg" alt="image">
                                                    </a>
                                                    <span><a href="#">Jimenez</a></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-4">
                                                <div class="stories-item">
                                                    <a href="#">
                                                        <img src="assets/images/user/user-29.jpg" alt="image">
                                                    </a>
                                                    <span><a href="#">Lolita</a></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-4">
                                                <div class="stories-item">
                                                    <a href="#">
                                                        <img src="assets/images/user/user-13.jpg" alt="image">
                                                    </a>
                                                    <span><a href="#">Matthew</a></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-4">
                                                <div class="stories-item">
                                                    <a href="#">
                                                        <img src="assets/images/user/user-30.jpg" alt="image">
                                                    </a>
                                                    <span><a href="#">Russell</a></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-4">
                                                <div class="stories-item">
                                                    <a href="#">
                                                        <img src="assets/images/user/user-31.jpg" alt="image">
                                                    </a>
                                                    <span><a href="#">Katzman</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="news-feed news-feed-post">
                                        <div class="post-header d-flex justify-content-between align-items-center">
                                            <div class="image">
                                                <a href="my-profile.html"><img src="assets/images/user/user-32.jpg" class="rounded-circle" alt="image"></a>
                                            </div>
                                            <div class="info ms-3">
                                                <span class="name"><a href="my-profile.html">Julie R. Morleyv</a></span>
                                                <span class="small-text"><a href="#">10 Mins Ago</a></span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
        
                                        <div class="post-body">
                                            <p>Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa convallis a pellentesque nec egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis.</p>
                                            <div class="post-image">
                                                <img src="assets/images/news-feed-post/post-1.jpg" alt="image">
                                            </div>
                                            <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                                <li class="post-react">
                                                    <a href="#"><i class="flaticon-like"></i><span>Like</span> <span class="number">1499 </span></a>
        
                                                    <ul class="react-list">
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-1.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-2.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-3.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-4.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-5.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-6.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-7.png" alt="Like"></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="post-comment">
                                                    <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span class="number">599 </span></a>
                                                </li>
                                                <li class="post-share">
                                                    <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">24 </span></a>
                                                </li>
                                            </ul>
                                            <div class="post-comment-list">
                                                <div class="comment-list">
                                                    <div class="comment-image">
                                                        <a href="my-profile.html"><img src="assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="comment-info">
                                                        <h3>
                                                            <a href="my-profile.html">David Moore</a>
                                                        </h3>
                                                        <span>5 Mins Ago</span>
                                                        <p>Donec rutrum congue leo eget malesuada nulla quis lorem ut libero malesuada feugiat donec rutrum congue leo eget malesuada donec rutrum congue leo eget malesuada. Praesent sapien massa convallis a pellentesque non nisi curabitur non nulla sit amet nisl tempus convallis lectus.</p>
                                                        <ul class="comment-react">
                                                            <li><a href="#" class="like">Like(2)</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-list">
                                                    <div class="comment-image">
                                                        <a href="my-profile.html"><img src="assets/images/user/user-15.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="comment-info">
                                                        <h3>
                                                            <a href="my-profile.html">Claire P. Toy</a>
                                                        </h3>
                                                        <span>45 Mins Ago</span>
                                                        <p>Donec rutrum congue leo eget malesuada praesent sapien massa convallis a pellentesque nec egestas non nisi curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                                        <ul class="comment-react">
                                                            <li><a href="#" class="like">Like(12)</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-list">
                                                    <div class="comment-image">
                                                        <a href="my-profile.html"><img src="assets/images/user/user-16.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="comment-info">
                                                        <h3>
                                                            <a href="my-profile.html">Karen Williams</a>
                                                        </h3>
                                                        <span>5 Mins Ago</span>
                                                        <p>Donec rutrum congue leo eget malesuada nulla quis lorem ut libero malesuada feugiat donec rutrum congue leo eget.</p>
                                                        <ul class="comment-react">
                                                            <li><a href="#" class="like">Like(2)</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="more-comments">
                                                    <a href="#">More Comments+</a>
                                                </div>
                                            </div>
                                            <form class="post-footer">
                                                <div class="footer-image">
                                                    <a href="#"><img src="assets/images/user/user-1.jpg" class="rounded-circle" alt="image"></a>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                                    <label><a href="#"><i class="flaticon-photo-camera"></i></a></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
        
                                    <div class="news-feed news-feed-post">
                                        <div class="post-header d-flex justify-content-between align-items-center">
                                            <div class="image">
                                                <a href="my-profile.html"><img src="assets/images/user/user-35.jpg" class="rounded-circle" alt="image"></a>
                                            </div>
                                            <div class="info ms-3">
                                                <span class="name"><a href="my-profile.html">William Fenton</a></span>
                                                <span class="small-text"><a href="#">50 Mins Ago</a></span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
        
                                        <div class="post-body">
                                            <p>💗</p>
                                            <div class="post-image">
                                                <img src="assets/images/news-feed-post/post-2.jpg" alt="image">
                                            </div>
                                            <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                                <li class="post-react">
                                                    <a href="#"><i class="flaticon-like"></i><span>Like</span> <span class="number">3 </span></a>
        
                                                    <ul class="react-list">
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-1.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-2.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-3.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-4.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-5.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-6.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-7.png" alt="Like"></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="post-comment">
                                                    <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span class="number">0 </span></a>
                                                </li>
                                                <li class="post-share">
                                                    <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">0 </span></a>
                                                </li>
                                            </ul>
                                            <form class="post-footer">
                                                <div class="footer-image">
                                                    <a href="#"><img src="assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                                    <label><a href="#"><i class="flaticon-photo-camera"></i></a></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
        
                                    <div class="news-feed news-feed-post">
                                        <div class="post-header d-flex justify-content-between align-items-center">
                                            <div class="image">
                                                <a href="my-profile.html"><img src="assets/images/user/user-36.jpg" class="rounded-circle" alt="image"></a>
                                            </div>
                                            <div class="info ms-3">
                                                <span class="name"><a href="my-profile.html">Maria Dodson</a></span>
                                                <span class="small-text"><a href="#">2 Hours Ago</a></span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
        
                                        <div class="post-body">
                                            <p>Keep Smiling 🧡</p>
                                            <div class="post-image">
                                                <img src="assets/images/news-feed-post/post-3.jpg" alt="image">
                                            </div>
                                            <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                                <li class="post-react">
                                                    <a href="#"><i class="flaticon-like"></i><span>Like</span> <span class="number">15 </span></a>
        
                                                    <ul class="react-list">
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-1.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-2.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-3.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-4.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-5.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-6.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-7.png" alt="Like"></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="post-comment">
                                                    <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span class="number">0 </span></a>
                                                </li>
                                                <li class="post-share">
                                                    <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">5 </span></a>
                                                </li>
                                            </ul>
                                            <form class="post-footer">
                                                <div class="footer-image">
                                                    <a href="#"><img src="assets/images/user/user-15.jpg" class="rounded-circle" alt="image"></a>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                                    <label><a href="#"><i class="flaticon-photo-camera"></i></a></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
        
                                    <div class="news-feed news-feed-post">
                                        <div class="post-header d-flex justify-content-between align-items-center">
                                            <div class="image">
                                                <a href="my-profile.html"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                            </div>
                                            <div class="info ms-3">
                                                <span class="name"><a href="my-profile.html">Karen Williams</a></span>
                                                <span class="small-text"><a href="#">10 Mins Ago</a></span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
        
                                        <div class="post-body">
                                            <p>Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada.</p>
                                            <div class="post-image">
                                                <img src="assets/images/news-feed-post/post-4.jpg" alt="image">
                                            </div>
                                            <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                                <li class="post-react">
                                                    <a href="#"><i class="flaticon-like"></i><span>Like</span> <span class="number">1499 </span></a>
        
                                                    <ul class="react-list">
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-1.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-2.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-3.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-4.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-5.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-6.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-7.png" alt="Like"></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="post-comment">
                                                    <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span class="number">599 </span></a>
                                                </li>
                                                <li class="post-share">
                                                    <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">24 </span></a>
                                                </li>
                                            </ul>
                                            <div class="post-comment-list">
                                                <div class="comment-list">
                                                    <div class="comment-image">
                                                        <a href="my-profile.html"><img src="assets/images/user/user-21.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="comment-info">
                                                        <h3>
                                                            <a href="my-profile.html">David Moore</a>
                                                        </h3>
                                                        <span>5 Mins Ago</span>
                                                        <p>Donec rutrum congue leo eget malesuada nulla quis lorem ut libero malesuada feugiat donec rutrum congue leo eget malesuada donec rutrum congue leo eget malesuada. Praesent sapien massa convallis a pellentesque non nisi curabitur non nulla sit amet nisl tempus convallis lectus.</p>
                                                        <ul class="comment-react">
                                                            <li><a href="#" class="like">Like(2)</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-list">
                                                    <div class="comment-image">
                                                        <a href="my-profile.html"><img src="assets/images/user/user-22.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="comment-info">
                                                        <h3>
                                                            <a href="my-profile.html">Claire P. Toy</a>
                                                        </h3>
                                                        <span>45 Mins Ago</span>
                                                        <p>Donec rutrum congue leo eget malesuada praesent sapien massa convallis a pellentesque nec egestas non nisi curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                                        <ul class="comment-react">
                                                            <li><a href="#" class="like">Like(12)</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="comment-list">
                                                    <div class="comment-image">
                                                        <a href="my-profile.html"><img src="assets/images/user/user-24.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="comment-info">
                                                        <h3>
                                                            <a href="my-profile.html">Karen Williams</a>
                                                        </h3>
                                                        <span>5 Mins Ago</span>
                                                        <p>Donec rutrum congue leo eget malesuada nulla quis lorem ut libero malesuada feugiat donec rutrum congue leo eget.</p>
                                                        <ul class="comment-react">
                                                            <li><a href="#" class="like">Like(2)</a></li>
                                                            <li><a href="#">Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="more-comments">
                                                    <a href="#">More Comments+</a>
                                                </div>
                                            </div>
                                            <form class="post-footer">
                                                <div class="footer-image">
                                                    <a href="#"><img src="assets/images/user/user-19.jpg" class="rounded-circle" alt="image"></a>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                                    <label><a href="#"><i class="flaticon-photo-camera"></i></a></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
        
                                    <div class="news-feed news-feed-post">
                                        <div class="post-header d-flex justify-content-between align-items-center">
                                            <div class="image">
                                                <a href="my-profile.html"><img src="assets/images/user/user-18.jpg" class="rounded-circle" alt="image"></a>
                                            </div>
                                            <div class="info ms-3">
                                                <span class="name"><a href="my-profile.html">Maria Dodson</a></span>
                                                <span class="small-text"><a href="#">2 Hours Ago</a></span>
                                            </div>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Post</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Post</a></li>
                                                </ul>
                                            </div>
                                        </div>
        
                                        <div class="post-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="post-image">
                                                <img src="assets/images/news-feed-post/post-5.jpg" alt="image">
                                            </div>
                                            <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                                <li class="post-react">
                                                    <a href="#"><i class="flaticon-like"></i><span>Like</span> <span class="number">15 </span></a>
        
                                                    <ul class="react-list">
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-1.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-2.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-3.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-4.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-5.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-6.png" alt="Like"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img src="assets/images/react/react-7.png" alt="Like"></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="post-comment">
                                                    <a href="#"><i class="flaticon-comment"></i><span>Comment</span> <span class="number">0 </span></a>
                                                </li>
                                                <li class="post-share">
                                                    <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">5 </span></a>
                                                </li>
                                            </ul>
                                            <form class="post-footer">
                                                <div class="footer-image">
                                                    <a href="#"><img src="assets/images/user/user-22.jpg" class="rounded-circle" alt="image"></a>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Write a comment..."></textarea>
                                                    <label><a href="#"><i class="flaticon-photo-camera"></i></a></label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
        
                                    <div class="load-more-posts-btn">
                                        <a href="#"><i class="flaticon-loading"></i> Load More Posts</a>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-3 col-md-12">
                                <aside class="widget-area">
                                    <div class="widget widget-birthday">
                                        <div class="birthday-title d-flex justify-content-between align-items-center">
                                            <h3>Today Birthdays</h3>
                                            <span><a href="#">See All</a></span>
                                        </div>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg1" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Earline Benally</a>
                                                </h4>
                                                <span>Today</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg2" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Jack Gulley</a>
                                                </h4>
                                                <span>Today</span>
                                            </div>
                                        </article>
        
                                        <div class="birthday-title d-flex justify-content-between align-items-center">
                                            <h3>Recent Birthdays</h3>
                                            <span><a href="#">See All</a></span>
                                        </div>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg3" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Lolita Benally</a>
                                                </h4>
                                                <span>May 18</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg4" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Russell Gulley</a>
                                                </h4>
                                                <span>May 20</span>
                                            </div>
                                        </article>
        
                                        <div class="birthday-title d-flex justify-content-between align-items-center">
                                            <h3>Coming Birthdays</h3>
                                            <span><a href="#">See All</a></span>
                                        </div>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg5" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Cindy L. Wilson</a>
                                                </h4>
                                                <span>July 18</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg6" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">Patricia E. Looney</a>
                                                </h4>
                                                <span>July 20</span>
                                            </div>
                                        </article>
                                        <article class="item">
                                            <a href="#" class="thumb">
                                                <span class="fullimage bg7" role="img"></span>
                                            </a>
            
                                            <div class="info">
                                                <h4 class="title">
                                                    <a href="#">James G. Nelson</a>
                                                </h4>
                                                <span>July 21</span>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="widget widget-explore-events">
                                        <h3 class="widget-title">Explore Events</h3>
        
                                        <article class="item">
                                            <a href="#"><img src="assets/images/explore-events/explore-1.jpg" alt="image"></a>
                                        </article>
                                        <article class="item">
                                            <a href="#"><img src="assets/images/explore-events/explore-2.jpg" alt="image"></a>
                                        </article>
                                    </div>
                                    <div class="widget widget-who-following">
                                        <h3 class="widget-title">Who's Following</h3>
                                        
                                        <div class="following-item d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="assets/images/user/user-42.jpg" class="rounded-circle" alt="image"></a>
                                            <span class="name"><a href="#">Shawn Lynch</a></span>
                                            <span class="add-friend"><a href="#">Add</a></span>
                                        </div>
                                        <div class="following-item d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="assets/images/user/user-43.jpg" class="rounded-circle" alt="image"></a>
                                            <span class="name"><a href="#">Kenneth Perry</a></span>
                                            <span class="add-friend"><a href="#">Add</a></span>
                                        </div>
                                        <div class="following-item d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="assets/images/user/user-44.jpg" class="rounded-circle" alt="image"></a>
                                            <span class="name"><a href="#">Janet Suarez</a></span>
                                            <span class="add-friend"><a href="#">Add</a></span>
                                        </div>
                                        <div class="following-item d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="assets/images/user/user-45.jpg" class="rounded-circle" alt="image"></a>
                                            <span class="name"><a href="#">Brian Mingo</a></span>
                                            <span class="add-friend"><a href="#">Add</a></span>
                                        </div>
                                        <div class="following-item d-flex justify-content-between align-items-center">
                                            <a href="#"><img src="assets/images/user/user-46.jpg" class="rounded-circle" alt="image"></a>
                                            <span class="name"><a href="#">Julia Ramos</a></span>
                                            <span class="add-friend"><a href="#">Add</a></span>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="about" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="about-personal-information">
                                    <div class="about-header d-flex justify-content-between align-items-center">
                                        <div class="title">Personal Information</div>

                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Information</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Information</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Information</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <ul class="information-list">
                                        <li>
                                            <span>Email:</span> <a href="mailto:info@zust.com">info@zust.com</a>
                                        </li>
                                        <li>
                                            <span>Birthday:</span> May 07, 1984
                                        </li>
                                        <li>
                                            <span>Occupation:</span> UX Designer
                                        </li>
                                        <li>
                                            <span>Birthplace:</span> 4988 Woodland Terrace Citrus Heights, CA 95610
                                        </li>
                                        <li>
                                            <span>Phone:</span> <a href="tel:916-879-7755">916-879-7755</a>
                                        </li>
                                        <li>
                                            <span>Gender:</span> Men
                                        </li>
                                        <li>
                                            <span>Relationship Status:</span> Single
                                        </li>
                                        <li>
                                            <span>Blood Group:</span> A+ Positive
                                        </li>
                                        <li>
                                            <span>Website:</span> <a href="#">www.zust.com</a>
                                        </li>
                                        <li>
                                            <span>Social Link:</span> <a href="#">www.zust.com</a>
                                        </li>
                                        <li>
                                            <span>Languages:</span> English, Turkish
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-12">
                                <div class="about-details-information">
                                    <div class="information-box-content">
                                        <div class="information-header d-flex justify-content-between align-items-center">
                                            <div class="title">About Me!</div>
    
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Information</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Information</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Information</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque auctor sit amet aliquam vel ullamcorper sit amet ligula. Lorem ipsum dolor sit amet consectetur adipiscing elit. Sed porttitor lectus nibh.</p>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>
                                    </div>

                                    <div class="information-box-content">
                                        <div class="information-header d-flex justify-content-between align-items-center">
                                            <div class="title">Education & Work</div>
    
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Information</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Information</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Information</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-content">
                                            <p class="designation">Master of Computer Science <span>(2018 - 2020)</span></p>
                                            <span class="title">University of Stanford</span>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>

                                        <div class="box-content">
                                            <p class="designation">Bachelor of Computer Science <span>(2014 - 2018)</span></p>
                                            <span class="title">Massachusetts Institute of Technology</span>
                                            <p>Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>

                                        <div class="box-content">
                                            <p class="designation">Senior UX/UI Designer <span>(Jun 2020 - Present)</span></p>
                                            <span class="title">Themeforest</span>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>

                                        <div class="box-content">
                                            <p class="designation">Product Designer <span>(Jan 2018 - May 2019)</span></p>
                                            <span class="title">Themeforest</span>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>
                                    </div>

                                    <div class="information-box-content">
                                        <div class="information-header d-flex justify-content-between align-items-center">
                                            <div class="title">Interests</div>
    
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-edit"></i> Edit Information</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-private"></i> Hide Information</a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="flaticon-trash"></i> Delete Information</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-content">
                                            <p class="designation">Hobbies:</p>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>

                                        <div class="box-content">
                                            <p class="designation">Favourite Books:</p>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>

                                        <div class="box-content">
                                            <p class="designation">Others Interests:</p>
                                            <p>Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Nulla porttitor accumsan tincidunt. Quisque velit nisi pretium ut lacinia in elementum id enim. Donec rutrum congue leo eget malesuada. Quisque velit nisi pretium ut lacinia in elementum id enim. Vivamus magna justo lacinia eget consectetur sed convallis at tellus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="tab-pane fade" id="friends" role="tabpanel">
                        <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                            <div class="title">
                                <h3>Friends</h3>
                                <span>199</span>
                            </div>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-friends-tab" data-bs-toggle="tab" href="#all-friends" role="tab" aria-controls="all-friends">All Friends</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link" id="recently-added-tab" data-bs-toggle="tab" href="#recently-added" role="tab" aria-controls="recently-added">Recently Added</a>
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
                            <div class="tab-pane fade show active" id="all-friends" role="tabpanel">
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

                            <div class="tab-pane fade" id="recently-added" role="tabpanel">
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

                    <div class="tab-pane fade" id="photos" role="tabpanel">
                        <div class="photos-inner-box-style d-flex justify-content-between align-items-center">
                            <div class="title">
                                <h3>Photos</h3>
                                <span>855</span>
                            </div>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-photos-tab" data-bs-toggle="tab" href="#all-photos" role="tab" aria-controls="all-photos">All Photos</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link" id="photos-albums-tab" data-bs-toggle="tab" href="#photos-albums" role="tab" aria-controls="photos-albums">Photos Albums</a>
                                </li>
                            </ul>
                            
                            <div class="photos-search-box">
                                <form>
                                    <input type="text" class="input-search" placeholder="Search photos...">
                                    <button type="submit"><i class="ri-search-line"></i></button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-photos" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-1.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-2.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-3.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-4.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-5.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-6.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-7.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-8.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-9.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-10.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-11.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-12.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-13.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-14.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-15.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-16.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="load-more-posts-btn">
                                    <a href="#"><i class="flaticon-loading"></i> Load More</a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="photos-albums" role="tabpanel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-16.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-15.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-14.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-13.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-12.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-11.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-10.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-9.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-8.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-7.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-6.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-5.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-4.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-3.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-2.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-photos-card">
                                            <a href=""><img src="assets/images/photos/photos-1.jpg" alt="image"></a>

                                            <div class="icon">
                                                <a href="#"><i class="flaticon-remove-user"></i></a>
                                                <a href="#"><i class="flaticon-download"></i></a>
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