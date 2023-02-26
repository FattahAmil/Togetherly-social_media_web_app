<?php
session_start();
require_once('../connection.php');

// Sanitize the input parameters
$id_post = filter_var($_GET['id_post'], FILTER_SANITIZE_NUMBER_INT);
$like_type = filter_var($_GET['like_type'], FILTER_SANITIZE_STRING);

// Check if the post exists in the database
$stmt_post = $conn->prepare("SELECT * FROM posts WHERE id_post = :id");
$stmt_post->bindParam(':id', $id_post);
$stmt_post->execute();
$post = $stmt_post->fetch(PDO::FETCH_ASSOC);
if (!$post) {
    echo "Error: post not found.";
    exit;
}

// Check if the user has already liked the post
$id_user = $_SESSION['id_session']; 
$stmt_like = $conn->prepare("SELECT * FROM likes WHERE id_post = :id_post AND id_user = :id_user");
$stmt_like->bindParam(':id_post', $id_post);
$stmt_like->bindParam(':id_user', $id_user);
$stmt_like->execute();
$like = $stmt_like->fetch(PDO::FETCH_ASSOC);

// Update the like in the database
if (!$like) {   
    // Insert a new like
    $stmt_insertlike = $conn->prepare("INSERT INTO likes (id_post, id_user, likeType) VALUES (:id_post, :id_user, :like_type)");
    $stmt_insertlike->bindParam(':id_post', $id_post);
    $stmt_insertlike->bindParam(':id_user', $id_user);
    $stmt_insertlike->bindParam(':like_type', $like_type);
    $stmt_insertlike->execute();
} else {
    // Check if the like type is the same as the previous one
    if ($like['likeType'] == $like_type) {
        // Remove the existing like
        $stmt_removelike = $conn->prepare("DELETE FROM likes WHERE id_post = :id_post AND id_user = :id_user");
        $stmt_removelike->bindParam(':id_post', $id_post);
        $stmt_removelike->bindParam(':id_user', $id_user);
        $stmt_removelike->execute();
        $like_type = null;
    } else {
        // Update the existing like
        $stmt_updatelike = $conn->prepare("UPDATE likes SET likeType = :like_type WHERE id_post = :id_post AND id_user = :id_user");
        $stmt_updatelike->bindParam(':like_type', $like_type);
        $stmt_updatelike->bindParam(':id_post', $id_post);
        $stmt_updatelike->bindParam(':id_user', $id_user);
        $stmt_updatelike->execute();
    }
}
<<<<<<< HEAD


// Get the number of likes for the post
$stmt_numlike = $conn->prepare("SELECT COUNT(*) AS num_likes FROM likes WHERE id_post = :id_post");
$stmt_numlike->bindParam(':id_post', $id_post);
$stmt_numlike->execute();
$result = $stmt_numlike->fetch(PDO::FETCH_ASSOC);
=======
$reqlike = $conn->prepare("SELECT * FROM likes WHERE id_post = ?");
$reqlike->execute(array($id_post));
$numlike=$reqlike->rowCount();
>>>>>>> 325c13287d50b9c06729194466d61a5b367197e0

// Return the number of likes and the selected reaction type
$response = array(
    'num_likes' => $numlike,
    'like_type' => $like_type
);
$json_string = json_encode($response);
echo $json_string;
