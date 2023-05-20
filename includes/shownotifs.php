<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include your custom JavaScript file -->
<script src="./assets/js/notification.js"></script>
<?php
try {
    $stmt_notifications = $conn->prepare("
    SELECT n.id_user, c.id_comment, l.id_like, n.created_at
    FROM notifications n
    LEFT JOIN comments c ON n.id_comment = c.id_comment
    LEFT JOIN likes l ON n.id_like = l.id_like
    WHERE (n.notification_type = 'comment' AND (c.id_user IS NULL OR c.id_user != :session_id) and n.id_user!= :session_id)
        OR (n.notification_type = 'like' AND (l.id_user IS NULL OR l.id_user != :session_id) and n.id_user!= :session_id)
    ORDER BY n.created_at DESC;
    ");
    $stmt_notifications->bindParam(':session_id', $_SESSION['id_session']);
    $stmt_notifications->execute();
    $notifications = $stmt_notifications->fetchAll(PDO::FETCH_ASSOC);

    foreach ($notifications as $notification) {
        $stmt_user = $conn->prepare("SELECT * FROM users WHERE id_user = :id_user");
        $stmt_user->bindParam(':id_user', $notification['id_user']);
        $stmt_user->execute();
        $user = $stmt_user->fetch(PDO::FETCH_ASSOC);
 
         if ($user) {
            ?>
            <div class="item d-flex justify-content-between align-items-center">
                <div class="figure">
                    <a href="<?php echo 'profile.php?id=' . $user['id_user']; ?>">
                        <img src="<?php echo $user['imgprfl_user']; ?>" class="rounded-circle" alt="image"
                            style="width:50px;height:50px;">
                    </a>
                </div>
                <div class="text">
                    <h4>
                        <a href="<?php echo 'profile.php?id=' . $user['id_user']; ?>">
                            <?php echo $user['prenom_user'] . " " . $user['nom_user']; ?>
                        </a>
                    </h4>
                    <?php
                        if (!empty($notification['id_comment'])) {
                            ?>
                            <a href="includes/postNotifs.php?id=<?php echo $notification['id_post']; ?>">
                                <span>Posted a comment on your status</span>
                            </a>
                            <?php
                        } elseif (!empty($notification['id_like'])) {
                            ?>
                            <a href="includes/postNotifs.php?id=<?php echo $notification['id_post']; ?>">
                                <span>Reacted to your status</span>
                            </a>
                            <?php
                        }
                        ?>
                    <span class="main-color"><?php echo $notification['created_at']; ?></span>
                   
                </div>
            </div>
            <?php
        }
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
?>