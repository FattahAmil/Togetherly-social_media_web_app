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
                        <li class="nav-item active">
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
                            <a href="live-chat.html" class="nav-link">
                                <span class="icon"><i class="flaticon-live-chat"></i></span>
                                <span class="menu-title">Live Chat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="video.html" class="nav-link">
                                <span class="icon"><i class="flaticon-video"></i></span>
                                <span class="menu-title">Video</span>
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
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <aside class="widget-area">
                            <div class="widget widget-view-profile">
                                <div class="profile-box d-flex justify-content-between align-items-center">
                                    <a href="my-profile.php"><img src="assets/images/user/user-1.jpg" alt="image"></a>
                                    <div class="text ms-2">
                                        <h3><a href="my-profile.php"><?php echo $donner['nom_users']." ".$donner['prenom_users']; ?></a></h3>
                                        <span>Washington</span>
                                    </div>
                                </div>
                                <ul class="profile-statistics">
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
                                <div class="profile-likes">
                                    <span><i class="flaticon-heart-shape-outline"></i> New Likes This Week</span>

                                    <ul>
                                        <li>
                                            <a href="#"><img src="assets/images/user/user-22.jpg" alt="image"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/user/user-23.jpg" alt="image"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/user/user-24.jpg" alt="image"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/user/user-25.jpg" alt="image"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/user/user-26.jpg" alt="image"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/images/user/user-27.jpg" alt="image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="profile-btn">
                                    <a href="my-profile.php" class="default-btn">View Profile</a>
                                </div>
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
                            <div class="news-feed news-feed-form">
                                <h3 class="news-feed-title">Create New Post</h3>

                                <form>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Write something here..."></textarea>
                                    </div>
                                    <ul class="button-group d-flex justify-content-between align-items-center">
                                        <li class="photo-btn">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="flaticon-photos"></i>
  photo
</button>
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
                                                <a href="my-profile.html"><img src="assets/images/user/user-33.jpg" class="rounded-circle" alt="image"></a>
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
                                                <a href="my-profile.html"><img src="assets/images/user/user-34.jpg" class="rounded-circle" alt="image"></a>
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
                                                <a href="my-profile.html"><img src="assets/images/user/user-8.jpg" class="rounded-circle" alt="image"></a>
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
                            <?php include_once"./includes/who_S_Following.php"; ?>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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