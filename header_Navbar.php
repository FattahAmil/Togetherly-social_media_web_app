<?php

$req1 = $conn->query('SELECT * FROM users WHERE id_user='.$id);
$donner =$req1->fetch();
?>
<div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="main-responsive-menu">
                        <div class="responsive-burger-menu d-lg-none d-block">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="index.php" class="navbar-brand d-flex align-items-center">
                            <img src="assets/images/logo.png" alt="image">
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-burger-menu m-auto">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>

                            <div class="search-box m-auto">
                                <form>
                                    <input type="text" class="input-search" placeholder="Search...">
                                    <button type="submit"><i class="ri-search-line"></i></button>
                                </form>
                            </div>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="index.php" class="home-btn"><i class="flaticon-home"></i></a>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown friend-requests-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="friend-requests-btn">
                                                <i class="flaticon-user"></i>
                                                <span>3</span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="friend-requests-header d-flex justify-content-between align-items-center">
                                                <h3>Friend Requests</h3>
                                                <i class="flaticon-menu"></i>
                                            </div>

                                            <div class="friend-requests-body" data-simplebar>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">Sandra Cross</a></h4>
                                                            <span>26 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-3.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">Kenneth Crowe</a></h4>
                                                            <span> Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-4.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">Andrea Harwell</a></h4>
                                                            <span>99 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">John Lago</a></h4>
                                                            <span>18 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-6.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">Sandra Cross</a></h4>
                                                            <span>26 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-7.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">Kenneth Crowe</a></h4>
                                                            <span>53 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-8.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">Andrea Harwell</a></h4>
                                                            <span>99 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item d-flex align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-9.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>

                                                    <div class="content d-flex justify-content-between align-items-center">
                                                        <div class="text">
                                                            <h4><a href="#">John Lago</a></h4>
                                                            <span>18 Friends</span>
                                                        </div>
                                                        <div class="btn-box d-flex align-items-center">
                                                            <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                            
                                                            <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="view-all-requests-btn">
                                                    <a href="friends.html" class="default-btn">View All Requests</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown messages-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="messages-btn">
                                                <i class="flaticon-email"></i>
                                                <span>2</span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="messages-header d-flex justify-content-between align-items-center">
                                                <h3>Messages</h3>
                                                <i class="flaticon-menu"></i>
                                            </div>
                                            <div class="messages-search-box">
                                                <form>
                                                    <input type="text" class="input-search" placeholder="Search Message...">
                                                    <button type="submit"><i class="ri-search-line"></i></button>
                                                </form>
                                            </div>
                                            <div class="messages-body" data-simplebar>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">James Vanwin</a></h4>
                                                        <span>Hello Dear I Want Talk To You</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Harry Lopez</a></h4>
                                                        <span>Hi. I Am looking For UI Designer</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-13.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Matthew Smith</a></h4>
                                                        <span>Thanks For Connecting!</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Russe Smith</a></h4>
                                                        <span>Thanks For Connecting!</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-1.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">James Vanwin</a></h4>
                                                        <span>Hello Dear I Want Talk To You</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Harry Lopez</a></h4>
                                                        <span>Hi. I Am looking For UI Designer</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-3.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Matthew Smith</a></h4>
                                                        <span>Thanks For Connecting!</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-4.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Russe Smith</a></h4>
                                                        <span>Thanks For Connecting!</span>
                                                    </div>
                                                </div>
                                                <div class="view-all-messages-btn">
                                                    <a href="messages.html" class="default-btn">View All Messages</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown notifications-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="notifications-btn">
                                                <i class="flaticon-bell"></i>
                                                <span>1</span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="notifications-header d-flex justify-content-between align-items-center">
                                                <h3>Notifications</h3>
                                                <i class="flaticon-menu"></i>
                                            </div>
                                            <div class="notifications-body" data-simplebar>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">James Vanwin</a></h4>
                                                        <span>Posted A Comment On Your Status</span>
                                                        <span class="main-color">20 Minites Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Harry Lopez</a></h4>
                                                        <span>Sent You A Friend Request</span>
                                                        <span class="main-color">2 Days Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-13.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Matthew Smith</a></h4>
                                                        <span>Add A Photo In Design Group</span>
                                                        <span class="main-color">3 Days Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">James Vanwin</a></h4>
                                                        <span>Posted A Comment On Your Status</span>
                                                        <span class="main-color">20 Minites Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-6.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Harry Lopez</a></h4>
                                                        <span>Sent You A Friend Request</span>
                                                        <span class="main-color">2 Days Ago</span>
                                                    </div>
                                                </div>
                                                <div class="item d-flex justify-content-between align-items-center">
                                                    <div class="figure">
                                                        <a href="#"><img src="assets/images/user/user-7.jpg" class="rounded-circle" alt="image"></a>
                                                    </div>
                                                    <div class="text">
                                                        <h4><a href="#">Matthew Smith</a></h4>
                                                        <span>Add A Photo In Design Group</span>
                                                        <span class="main-color">3 Days Ago</span>
                                                    </div>
                                                </div>
                                                <div class="view-all-notifications-btn">
                                                    <a href="notifications.html" class="default-btn">View All Notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown language-option">
                                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-global"></i>
                                            <span class="lang-name"></span>
                                        </button>
                                        <div class="dropdown-menu language-dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/uk.png" alt="flag">
                                                Eng
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/china.png" alt="flag">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="assets/images/uae.png" alt="flag">
                                                العربيّة
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="option-item">
                                    <div class="dropdown profile-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="menu-profile">
                                                <img src="assets/images/user/user-1.jpg" class="rounded-circle" alt="image">
                                                <span class="name"><?php echo $donner['nom_user']; ?></span>
                                                <span class="status-online"></span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="profile-header">
                                                <h3><?php echo $donner['nom_user']." ".$donner['prenom_user'];?></h3>
                                                <a href="mailto:<?php echo $donner['email_user'];?>"><?php echo $donner['email_user'];?></a>
                                            </div>
                                            <ul class="profile-body">
                                                <li><i class="flaticon-user"></i> <a href="my-profile.php">My Profile</a></li>
                                                <li><i class="flaticon-settings"></i> <a href="setting.php">Setting</a></li>
                                                <li><i class="flaticon-privacy"></i> <a href="privacy.php">Privacy</a></li>
                                                <li><i class="flaticon-information"></i> <a href="help-and-support.php">Help & Support</a></li>
                                                <li><i class="flaticon-logout"></i> <a href="index.php">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="others-option-for-responsive">
                    <div class="container">
                        <div class="dot-menu">
                            <div class="inner">
                                <div class="circle circle-one"></div>
                                <div class="circle circle-two"></div>
                                <div class="circle circle-three"></div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="option-inner">
                                <div class="others-options d-flex align-items-center">
                                    <div class="option-item">
                                        <a href="index.html" class="home-btn"><i class="flaticon-home"></i></a>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown friend-requests-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="friend-requests-btn">
                                                    <i class="flaticon-user"></i>
                                                    <span>3</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="friend-requests-header d-flex justify-content-between align-items-center">
                                                    <h3>Friend Requests</h3>
                                                    <i class="flaticon-menu"></i>
                                                </div>
    
                                                <div class="friend-requests-body">
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-2.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">Sandra Cross</a></h4>
                                                                <span>26 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-3.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">Kenneth Crowe</a></h4>
                                                                <span>53 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-4.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">Andrea Harwell</a></h4>
                                                                <span>99 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-5.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
    
                                                        <div class="content d-flex justify-content-between align-items-center">
                                                            <div class="text">
                                                                <h4><a href="#">John Lago</a></h4>
                                                                <span>18 Friends</span>
                                                            </div>
                                                            <div class="btn-box d-flex align-items-center">
                                                                <button class="delete-btn d-inline-block me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button"><i class="ri-close-line"></i></button>
                                
                                                                <button class="confirm-btn d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm" type="button"><i class="ri-check-line"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-requests-btn">
                                                        <a href="friends.html" class="default-btn">View All Requests</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown messages-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="messages-btn">
                                                    <i class="flaticon-email"></i>
                                                    <span>2</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="messages-header d-flex justify-content-between align-items-center">
                                                    <h3>Messages</h3>
                                                    <i class="flaticon-menu"></i>
                                                </div>
                                                <div class="messages-search-box">
                                                    <form>
                                                        <input type="text" class="input-search" placeholder="Search Message...">
                                                        <button type="submit"><i class="ri-search-line"></i></button>
                                                    </form>
                                                </div>
                                                <div class="messages-body">
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">James Vanwin</a></h4>
                                                            <span>Hello Dear I Want Talk To You</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Harry Lopez</a></h4>
                                                            <span>Hi. I Am looking For UI Designer</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-13.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Matthew Smith</a></h4>
                                                            <span>Thanks For Connecting!</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-14.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Russe Smith</a></h4>
                                                            <span>Thanks For Connecting!</span>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-messages-btn">
                                                        <a href="messages.html" class="default-btn">View All Messages</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown notifications-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="notifications-btn">
                                                    <i class="flaticon-bell"></i>
                                                    <span>1</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="notifications-header d-flex justify-content-between align-items-center">
                                                    <h3>Notifications</h3>
                                                    <i class="flaticon-menu"></i>
                                                </div>
                                                <div class="notifications-body">
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-11.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">James Vanwin</a></h4>
                                                            <span>Posted A Comment On Your Status</span>
                                                            <span class="main-color">20 Minites Ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-12.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Harry Lopez</a></h4>
                                                            <span>Sent You A Friend Request</span>
                                                            <span class="main-color">2 Days Ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="item d-flex justify-content-between align-items-center">
                                                        <div class="figure">
                                                            <a href="#"><img src="assets/images/user/user-13.jpg" class="rounded-circle" alt="image"></a>
                                                        </div>
                                                        <div class="text">
                                                            <h4><a href="#">Matthew Smith</a></h4>
                                                            <span>Add A Photo In Design Group</span>
                                                            <span class="main-color">3 Days Ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-notifications-btn">
                                                        <a href="notifications.html" class="default-btn">View All Notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown language-option">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-global"></i>
                                                <span class="lang-name"></span>
                                            </button>
                                            <div class="dropdown-menu language-dropdown-menu">
                                                <a class="dropdown-item" href="#">
                                                    <img src="assets/images/uk.png" alt="flag">
                                                    Eng
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <img src="assets/images/china.png" alt="flag">
                                                    简体中文
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <img src="assets/images/uae.png" alt="flag">
                                                    العربيّة
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="dropdown profile-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="menu-profile">
                                                    <img src="assets/images/user/user-1.jpg" class="rounded-circle" alt="image">
                                                    <span class="name"><?php echo $donner['nom_user']; ?></span>
                                                    <span class="status-online"></span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="profile-header">
                                                    <h3><?php echo $donner['nom_user']." ".$donner['prenom_user'];?></h3>
                                                    <a href="mailto:<?php echo $donner['email_user'];?>"><?php echo $donner['email_user'];?></a>
                                                </div>
                                                <ul class="profile-body">
                                                    <li><i class="flaticon-user"></i> <a href="my-profile.php">My Profile</a></li>
                                                    <li><i class="flaticon-settings"></i> <a href="setting.php">Setting</a></li>
                                                    <li><i class="flaticon-privacy"></i> <a href="privacy.php">Privacy</a></li>
                                                    <li><i class="flaticon-information"></i> <a href="help-and-support.php">Help & Support</a></li>
                                                    <li><i class="flaticon-logout"></i> <a href="index.php">Logout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option-item">
                                        <div class="search-box">
                                            <form>
                                                <input type="text" class="input-search" placeholder="Search...">
                                                <button type="submit"><i class="ri-search-line"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            