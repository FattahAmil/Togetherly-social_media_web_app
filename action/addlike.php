<?php
session_start();
require_once('../connection.php');

// Sanitize the input parameters
$id_post = filter_var($_GET['id_post'], FILTER_SANITIZE_NUMBER_INT);
$like_type =htmlspecialchars($_GET['like_type']);

// Check if the post exists in the database
$stmt_post = $conn->prepare("SELECT * FROM posts WHERE id_post = :id");
$stmt_post->bindParam(':id', $id_post);
$stmt_post->execute();
$post = $stmt_post->fetch(PDO::FETCH_ASSOC);
if (!$post) {
    echo "Error: post not found.";
    exit;
}
$post_user_id = $post['id_user'];

// Check if the user has already liked the post
$id_user = $_SESSION['id_session']; 
$stmt_like = $conn->prepare("SELECT * FROM likes WHERE id_post = :id_post AND id_user = :id_user");
$stmt_like->bindParam(':id_post', $id_post);
$stmt_like->bindParam(':id_user', $id_user);
$stmt_like->execute();
$like = $stmt_like->fetch(PDO::FETCH_ASSOC);



$isLiked=false;
// Update the like in the database
if (!$like) {   
    // Insert a new like
    $stmt_insertlike = $conn->prepare("INSERT INTO likes (id_post, id_user, likeType) VALUES (:id_post, :id_user, :like_type)");
    $stmt_insertlike->bindParam(':id_post', $id_post);
    $stmt_insertlike->bindParam(':id_user', $id_user);
    $stmt_insertlike->bindParam(':like_type', $like_type);
    $stmt_insertlike->execute();
   

    if($post_user_id!=$id_user and $stmt_insertlike ){
        // Insert a new row in the notifications table for the post user
          $stmt_insertnotif = $conn->prepare("INSERT INTO notifications (id_user, id_post, notification_type, id_like) VALUES (:id_user, :id_post, 'like', :id_like)");
          $stmt_insertnotif->bindParam(':id_user', $id_user);
          $stmt_insertnotif->bindParam(':id_post', $id_post);
          $stmt_insertnotif->bindParam(':id_like', $id_like);
          $stmt_insertnotif->execute();
          }
    
} else {
    $isLiked=true;
    // Check if the like type is the same as the previous one
    if ($like['likeType'] == $like_type) {
        // Remove the existing like
        $stmt_removelike = $conn->prepare("DELETE FROM likes WHERE id_post = :id_post AND id_user = :id_user");
        $stmt_removelike->bindParam(':id_post', $id_post);
        $stmt_removelike->bindParam(':id_user', $id_user);
        $stmt_removelike->execute();
        $like_type = null;
         // delete the row in the notifications table when the like is removed for the post user
          $stmt_deletenotif = $conn->prepare("DELETE FROM notifications WHERE id_post = :id_post AND id_user = :id_user");
          $stmt_deletenotif->bindParam(':id_user', $id_user);
          $stmt_deletenotif->bindParam(':id_post', $id_post);
          $stmt_deletenotif->execute(); 

    } else {
        // Update the existing like
        $stmt_updatelike = $conn->prepare("UPDATE likes SET likeType = :like_type WHERE id_post = :id_post AND id_user = :id_user");
        $stmt_updatelike->bindParam(':like_type', $like_type);
        $stmt_updatelike->bindParam(':id_post', $id_post);
        $stmt_updatelike->bindParam(':id_user', $id_user);
        $stmt_updatelike->execute();
    }
}


// Get the number of likes for the post
$stmt_numlike = $conn->prepare("SELECT COUNT(*) AS num_likes FROM likes WHERE id_post = :id_post");
$stmt_numlike->bindParam(':id_post', $id_post);
$stmt_numlike->execute();
$result = $stmt_numlike->fetch(PDO::FETCH_ASSOC);

// Get the number of likes for the post
$stmt_allLike = $conn->prepare("SELECT count(*) AS allLike FROM likes l,posts p where l.id_post = p.id_post and p.id_user = :id_user");
$stmt_allLike->bindParam(':id_user', $id_user);
$stmt_allLike->execute();
$allLike = $stmt_allLike->fetch(PDO::FETCH_ASSOC);

// Return the number of likes and the selected reaction type
$response = array(
    'num_likes' => $result['num_likes'],
    'like_type' => $like_type,
    'isLiked' => $isLiked,
    'allLike' => $allLike['allLike']
);
echo json_encode($response); 
