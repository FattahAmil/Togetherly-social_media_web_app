<?php
session_start();
require('connection.php');
$id=$_SESSION['id_session'];
$id_get=$_GET['id'];
if ($id==false) {
    header("location:login.php");
}
if ($_GET['id']==null || $_GET['id']==$_SESSION['id_session']) {
    header("location:my-profile.php");
}

$req=$conn->prepare("SELECT * FROM follow where id_follower=".$id_get);
$req->execute();
$req2=$conn->prepare("SELECT * FROM follow where id_following=".$id_get);
$req2->execute();
$req3=$conn->prepare("SELECT * FROM likes l,posts p where l.id_post=p.id_post and p.id_user=".$id_get);
$req3->execute();
//followers list
$req5 = $conn->query('SELECT * FROM follow,users WHERE id_user=id_following and id_follower='.$id_get);
//recupere les donner de profile
$req4 = $conn->query('SELECT * FROM users WHERE id_user='.$id_get);
$donner_etulisateur =$req4->fetch();
?>

<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                                    <img src="<?php echo $donner_etulisateur['imgprfl_user'];?>" style="width:250px;height:250px" alt="image">
                                </a>
                                <div class="icon">
                                    <a href="#"><i class="flaticon-photo-camera"></i></a>
                                </div>
                            </div>
                            <div class="info-text ms-3">
                                <h3><a href="#"><?php echo $donner_etulisateur['nom_user']." ".$donner_etulisateur['prenom_user'];?></a></h3>
                                <span><a href="mailto:<?php echo $donner_etulisateur['email_user'];?>"><?php echo $donner_etulisateur['email_user'];?></a></span>
                            </div>
                            <ul class="statistics">
                                <li>
                                    <a href="#">
                                        <span class="item-number" id="liked"><?php echo $req3->rowCount(); ?></span> 
                                        <span class="item-text">Likes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="item-number"><?php echo $req->rowCount(); ?></span> 
                                        <span class="item-text">Following</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="item-number"><?php echo $req2->rowCount(); ?></span> 
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
  
                        
                        <!--  start show post   -->
                            <?php include_once'includes/showpost_profile.php';   ?>                            
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
                                    <?php include_once"includes/who_S_Following.php"; ?>
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
                                            <span>Email:</span> <a href="mailto:<?php echo $donner_etulisateur['email_user'];?>"><?php echo $donner_etulisateur['email_user'];?></a>
                                        </li>
                                        <li>
                                            <span>Occupation:</span> UX Designer
                                        </li>
                                        <li>
                                            <span>Phone:</span> <a href="tel:<?php echo $donner_etulisateur['phone_user'];?>"><?php echo $donner_etulisateur['phone_user'];?></a>
                                        </li>
                                        <li>
                                            <span>Gender:</span> <?php echo $donner_etulisateur['gender_user'];?>
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

                                   

                                    
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="tab-pane fade" id="friends" role="tabpanel">
                        <div class="friends-inner-box-style d-flex justify-content-between align-items-center">
                            

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-friends-tab" data-bs-toggle="tab" href="#all-friends" role="tab" aria-controls="all-friends">Followers</a>
                                </li>
        
                                <li class="nav-item">
                                    <a class="nav-link" id="recently-added-tab" data-bs-toggle="tab" href="#recently-added" role="tab" aria-controls="recently-added">Following</a>
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
                                    <?php  
                                    while ($donner_follower=$req5->fetch(PDO::FETCH_ASSOC)){
                                        //follower counter _follower
                                    $req5_1=$conn->prepare("SELECT * FROM follow where id_follower=".$donner_follower['id_user']);
                                    $req5_1->execute();
                                    $req5_2=$conn->prepare("SELECT * FROM follow where id_following=".$donner_follower['id_user']);
                                    $req5_2->execute();
                                    $req5_3=$conn->prepare("SELECT * FROM likes l,posts p where l.id_post=p.id_post and p.id_user=".$donner_follower['id_user']);
                                    $req5_3->execute();
                                    ?>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-friends-card">
                                            <div class="friends-image">
                                                <a href='<?php if ($donner_follower['id_user']==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$donner_follower['id_user'];
    } ?>'>
                                                    <img src="assets/images/friends/friends-bg-1.jpg" alt="image">
                                                </a>
                                                <div class="icon">
                                                    <a href='<?php if ($donner_follower['id_user']==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$donner_follower['id_user'];
    } ?>'><i class="flaticon-user"></i></a>
                                                </div>
                                            </div>
                                            <div class="friends-content">
                                                <div class="friends-info d-flex justify-content-between align-items-center">
                                                    <a href='<?php if ($donner_follower['id_user']==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$donner_follower['id_user'];
    } ?>'>
                                                        <img src="<?php echo $donner_follower['imgprfl_user']; ?>" style="height:100px;width:100px;" alt="image">
                                                    </a>
                                                    <div class="text ms-3">
                                                        <h3><a href='<?php if ($donner_follower['id_user']==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$donner_follower['id_user'];
    } ?>'><?php echo $donner_follower['nom_user']." ".$donner_follower['prenom_user'];?></a></h3>
                                                        
                                                    </div>
                                                </div>
                                                <ul class="statistics">
                                                    <li>
                                                        <a href="#">
                                                            <span class="item-number"><?php echo $req5_3->rowCount(); ?></span> 
                                                            <span class="item-text">Likes</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="item-number"><?php echo $req5_2->rowCount(); ?></span> 
                                                            <span class="item-text">Following</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="item-number"><?php echo $req5_1->rowCount(); ?></span> 
                                                            <span class="item-text">Followers</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="button-group d-flex justify-content-between align-items-center">
                                                    <div class="send-message-btn">
                                                        <button type="submit">Send Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <?php } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="recently-added" role="tabpanel">
                                <div class="row justify-content-center">
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