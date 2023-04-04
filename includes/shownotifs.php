 <?php      


                                // Fetch notification for a comment
                                $stmt_notifcomments = $conn->prepare("SELECT n.id_comment, c.id_user, DATE_FORMAT(n.created_at, '%M %d, %Y %H:%i:%S') AS created_at FROM notifications n,comments c WHERE n.id_comment=c.id_comment and  n.notification_type='comment' and not c.id_user = ".$_SESSION['id_session'] );
                                $stmt_notifcomments->execute();
                                $notifications_comments = $stmt_notifcomments->fetchAll(PDO::FETCH_ASSOC);   
                                
                                foreach ($notifications_comments as $notification_comment) {
                                    $stmt_user = $conn->prepare("SELECT * FROM users WHERE id_user = :id_user");
                                    $stmt_user->bindParam(':id_user', $notification_comment['id_user']);
                                    $stmt_user->execute();
                                    $user = $stmt_user->fetch(PDO::FETCH_ASSOC); ?> 
                     
                     
                            <div class="item d-flex justify-content-between align-items-center">
                            <div class="figure">
                                <a href="<?php  echo 'profile.php?id='.$user['id_user'];?>">
                                <img src="<?php echo $user['imgprfl_user']; ?>" class="rounded-circle" alt="image" style="width:50px;height:50px;"></a>
                            </div>
                            <div class="text">
                                <h4><a href="<?php echo 'profile.php?id='.$user['id_user'];?>">
                                <?php echo $user['prenom_user']." ".$user['nom_user']; ?></a></h4>
                                <span>Posted A Comment On Your Status</span>
                                <span class="main-color"><?php echo $notification_comment['created_at']; ?></span>
                           </div>
                           </div> <?php } ?>
                   
         
           