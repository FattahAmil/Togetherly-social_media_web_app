<?php
if ($id==false) {
    header("location:login.php");
}

$reqFollow1 = $conn->query('SELECT * FROM users inner join follow on id_users=id_following WHERE NOT id_follower='.$_SESSION['id_session'].' AND NOT id_users='.$_SESSION['id_session']);

/*
$reqFollow1->execute(array($_SESSION['id_session'],$donner1['id_users']));
$reqFollow1=$reqFollow1->rowCount();
$reqFollow2 = $conn->prepare('SELECT * FROM users inner join follow on id_users=id_follower where id_follower= ? and id_following = ?');*/

?>


<div class="widget widget-who-following">
                                <h3 class="widget-title">Who's Following</h3>
                                <?php
                               
                                
                                 while ($donner1 =$reqFollow1->fetch()) {
                                    
                                    ?>
                                <div class="following-item d-flex justify-content-between align-items-center">
                                    <a href="#"><img src="assets/images/user/user-42.jpg" class="rounded-circle" alt="image"></a>
                                    <span class="name"><a href="#"><?php echo $donner1['nom_user']." ".$donner1['prenom_user'];?></a></span>
                                    <span class="add-friend"><a href="./action/follow.php?followedid=<?php echo $donner1['id_user']?>">Add</a></span>
                                </div>
                                <?php }?>
                                
                            </div>