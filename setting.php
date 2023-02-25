
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
            <?php include_once"includes/header_Navbar.php"; ?>
            <!-- End Navbar Area -->
            
            <!-- Start Sidemenu Area -->
            <?php include_once"includes/Sidemenu.php"; ?>
            <!-- End Sidemenu Area -->
            
            <!-- Start Content Page Box Area -->
            <div class="content-page-box-area">
               <div class="page-banner-box">
                    <h3>Account Setting</h3>
                </div>

                <div class="account-setting-list-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-information-tab" data-bs-toggle="tab" href="#profile-information" role="tab" aria-controls="profile-information">Profile Information</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="account-tab" data-bs-toggle="tab" href="#account" role="tab" aria-controls="account">Account</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="privacy-tab" data-bs-toggle="tab" href="#privacy" role="tab" aria-controls="privacy">Privacy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="notification-tab" data-bs-toggle="tab" href="#notification" role="tab" aria-controls="notification">Notification</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="message-tab" data-bs-toggle="tab" href="#message" role="tab" aria-controls="message">Message</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="close-account-tab" data-bs-toggle="tab" href="#close-account" role="tab" aria-controls="close-account">Close Account</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="profile-information" role="tabpanel">
                        <form class="account-setting-form">
                            <h3>Profile Information</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Backup Email</label>
                                        <input type="email" class="form-control" placeholder="Backup email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="Date of birth" id="datepicker">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone No:</label>
                                        <input type="number" class="form-control" placeholder="Phone no">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Occupation</label>
                                        <select class="form-select">
                                            <option selected="1">Occupation</option>
                                            <option value="2">Software Developer</option>
                                            <option value="3">Biomedical Engineer</option>
                                            <option value="4">Civil Engineer</option>
                                            <option value="5">General Practitioner</option>
                                            <option value="6">Structural Engineer</option>
                                            <option value="7">Pharmacy Technician</option>
                                            <option value="8">Mechanical Engineer</option>
                                            <option value="9">Petroleum Engineer</option>
                                            <option value="10">Technician</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-select">
                                            <option selected="1">Gender</option>
                                            <option value="2">Male</option>
                                            <option value="3">Female</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Relation Status</label>
                                        <select class="form-select">
                                            <option selected="1">Relation Status</option>
                                            <option value="2">Married</option>
                                            <option value="3">Unmarried</option>
                                            <option value="4">Single</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select class="form-select">
                                            <option selected="1">Blood Group</option>
                                            <option value="2">A+</option>
                                            <option value="3">A-</option>
                                            <option value="4">B+</option>
                                            <option value="5">B-</option>
                                            <option value="6">O+</option>
                                            <option value="7">O-</option>
                                            <option value="8">AB+</option>
                                            <option value="9">AB-</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select class="form-select">
                                            <option selected="1">Language</option>
                                            <option value="2">English</option>
                                            <option value="3">Portuguese</option>
                                            <option value="4">Japanese</option>
                                            <option value="5">Russian</option>
                                            <option value="6">Javanese</option>
                                            <option value="7">Gujarati</option>
                                            <option value="8">Yoruba</option>
                                            <option value="9">Polish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-select">
                                            <option selected="1">City</option>
                                            <option value="2">Canada</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Switzerland</option>
                                            <option value="5">Australia</option>
                                            <option value="6">United States</option>
                                            <option value="7">New Zealand</option>
                                            <option value="8">United Kingdom</option>
                                            <option value="9">Netherlands</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-select">
                                            <option selected="1">State</option>
                                            <option value="2">Canada</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Switzerland</option>
                                            <option value="5">Australia</option>
                                            <option value="6">United States</option>
                                            <option value="7">New Zealand</option>
                                            <option value="8">United Kingdom</option>
                                            <option value="9">Netherlands</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-select">
                                            <option selected="1">Country</option>
                                            <option value="2">Canada</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Switzerland</option>
                                            <option value="5">Australia</option>
                                            <option value="6">United States</option>
                                            <option value="7">New Zealand</option>
                                            <option value="8">United Kingdom</option>
                                            <option value="9">Netherlands</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="account" role="tabpanel">
                        <form class="account-setting-form">
                            <h3>Account Information</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" class="form-control" placeholder="User name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Account Email</label>
                                        <input type="email" class="form-control" placeholder="Account email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-select">
                                            <option selected="1">Country</option>
                                            <option value="2">Canada</option>
                                            <option value="3">Germany</option>
                                            <option value="4">Switzerland</option>
                                            <option value="5">Australia</option>
                                            <option value="6">United States</option>
                                            <option value="7">New Zealand</option>
                                            <option value="8">United Kingdom</option>
                                            <option value="9">Netherlands</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <form class="account-setting-form">
                            <h3>Security Information</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Recovery Email</label>
                                        <input type="email" class="form-control" placeholder="Recovery email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Recovery Phone</label>
                                        <input type="number" class="form-control" placeholder="Recovery phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Security Question 01</label>
                                        <input type="email" class="form-control" placeholder="Security question 01">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Security Question 012</label>
                                        <input type="email" class="form-control" placeholder="Security question 02">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Security Question 03</label>
                                        <input type="email" class="form-control" placeholder="Security question 03">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Save</button>
                                </div>
                            </div>
                        </form>

                        <form class="account-setting-form">
                            <h3>Change Password</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" placeholder="Current password">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" placeholder="New password">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Change Password</label>
                                        <input type="password" class="form-control" placeholder="Change password">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Save Change</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="privacy" role="tabpanel">
                        <form class="account-setting-form">
                            <h3>Privacy Settings</h3>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Who Can See Your Profile?</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Who Can See Your Future Post?</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Who Can Send You Friend Request?</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Who Can See Your Chat Activity?</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Who Can See Your Phone Number?</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>How People Find And Contact You?</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Save Change</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="notification" role="tabpanel">
                        <div class="account-setting-notification">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="notification-content">
                                        <h3>Notification</h3>

                                        <ul class="alert-box">
                                            <li>Where You Receive Comment Notification?</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="email">
                                                    <label class="form-check-label" for="email">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="SMS">
                                                    <label class="form-check-label" for="SMS">SMS</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="alert-box">
                                            <li>Get Notifications When You're Tagged By</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="anyone">
                                                    <label class="form-check-label" for="anyone">Anyone</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="friends">
                                                    <label class="form-check-label" for="friends">Friends</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="alert-box">
                                            <li>Get Notifications When Updates From Friends</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="email-2">
                                                    <label class="form-check-label" for="email-2">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="SMS-2">
                                                    <label class="form-check-label" for="SMS-2">SMS</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="other-notification-content">
                                        <h3>Other Notifications</h3>

                                        <ul class="alert-box">
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="recommended-videos">
                                                    <label class="form-check-label" for="recommended-videos">Recommended Videos</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="games">
                                                    <label class="form-check-label" for="games">Games</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="breaking-news">
                                                    <label class="form-check-label" for="breaking-news">Breaking News</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="pages-follow-notification">
                                                    <label class="form-check-label" for="pages-follow-notification">Pages Follow Notification</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="notification-content">
                                        <ul class="alert-box">
                                            <li>Where You Receive Friend Request Notification?</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="email-3">
                                                    <label class="form-check-label" for="email-3">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="SMS-3">
                                                    <label class="form-check-label" for="SMS-3">SMS</label>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="alert-box">
                                            <li>Where You Receive Birthday Notification?</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="email-4">
                                                    <label class="form-check-label" for="email-4">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="SMS-4">
                                                    <label class="form-check-label" for="SMS-4">SMS</label>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="alert-box">
                                            <li>Where You Receive Groups Notification?</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="email-5">
                                                    <label class="form-check-label" for="email-5">Email</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="SMS-5">
                                                    <label class="form-check-label" for="SMS-5">SMS</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="message" role="tabpanel">
                        <div class="account-setting-message">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="message-content">
                                        <h3>Messages Setting</h3>

                                        <ul class="alert-box">
                                            <li>Send Me Messages To My Cell Phone</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ON">
                                                    <label class="form-check-label" for="ON">ON</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="OFF">
                                                    <label class="form-check-label" for="OFF">OFF</label>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="alert-box">
                                            <li>General Announcement, Updates, Posts, And Videos</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ON-2">
                                                    <label class="form-check-label" for="ON-2">ON</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="OFF-2">
                                                    <label class="form-check-label" for="OFF-2">OFF</label>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul class="alert-box">
                                            <li>Messages From Activity On My Page</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ON-3">
                                                    <label class="form-check-label" for="ON-3">ON</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="OFF-3">
                                                    <label class="form-check-label" for="OFF-3">OFF</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="message-content">
                                        <ul class="alert-box">
                                            <li>Page Follow Notification</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ON-4">
                                                    <label class="form-check-label" for="ON-4">ON</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="OFF-4">
                                                    <label class="form-check-label" for="OFF-4">OFF</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="alert-box">
                                            <li>Breaking News</li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="ON-5">
                                                    <label class="form-check-label" for="ON-5">ON</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="OFF-5">
                                                    <label class="form-check-label" for="OFF-5">OFF</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="close-account" role="tabpanel">
                        <form class="account-setting-form">
                            <div class="title">
                                <h3>Close Account</h3>
                                <p><span>Warning:</span> If you close your account, all your followers and friends will be unsubscribed and you will lose access forever.</p>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Your Email Address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Your Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Delate Account</button>
                                </div>
                            </div>
                        </form>
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