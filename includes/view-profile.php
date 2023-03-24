<?php
$req=$conn->prepare("SELECT * FROM follow where id_follower=".$_SESSION['id_session']);
$req->execute();
$req1=$conn->prepare("SELECT * FROM follow where id_following=".$_SESSION['id_session']);
$req1->execute();
$req2=$conn->prepare("SELECT * FROM likes l,posts p where l.id_post=p.id_post and p.id_user=".$_SESSION['id_session']);
$req2->execute();
?>

<div class="widget widget-view-profile">
                                <div class="profile-box d-flex justify-content-between align-items-center">
                                    <a href="my-profile.php"><img src="<?php echo $donner['imgprfl_user'];  ?>" width="80" alt="image"></a>
                                    <div class="text ms-2">
                                        <h3><a href="my-profile.php"><?php echo $donner['nom_user']." ".$donner['prenom_user']; ?></a></h3>
                                        <span>Washington</span>
                                    </div>
                                </div>
                                <ul class="profile-statistics">
                                    <li>
                                        <a href="#">
                                            <span class="item-number" id="liked"><?php echo $req2->rowCount();  ?></span> 
                                            <span class="item-text">Likes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="item-number" id="following"><?php echo $req->rowCount();  ?></span> 
                                            <span class="item-text">Following</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="item-number"><?php echo $req1->rowCount();  ?></span> 
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
                            