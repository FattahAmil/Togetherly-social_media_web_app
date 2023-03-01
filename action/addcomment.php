<?php
session_start();
require_once('../connection.php');

// Sanitize the input parameters
$id_post = filter_var($_GET['id_post'], FILTER_SANITIZE_NUMBER_INT);
$comment = filter_var($_GET['content'], FILTER_SANITIZE_STRING);

// Check if the post exists in the database
if (!empty($comment)) {
    # code...

$stmt_post = $conn->prepare("SELECT * FROM posts WHERE id_post = :id");
$stmt_post->bindParam(':id', $id_post);
$stmt_post->execute();
$post = $stmt_post->fetch(PDO::FETCH_ASSOC);
if (!$post) {
    echo "Error: post not found.";
    exit;
}
// Get the current timestamp
$current_time = date('Y-m-d H:i:s');

// Insert the new comment in the database with the current timestamp
$id_user = $_SESSION['id_session']; 
$stmt_insertcomment = $conn->prepare("INSERT INTO comments (id_post, id_user, comment, created_at) VALUES (:id_post, :id_user, :comment, :created_at)");
$stmt_insertcomment->bindParam(':id_post', $id_post);
$stmt_insertcomment->bindParam(':id_user', $id_user);
$stmt_insertcomment->bindParam(':comment', $comment);
$stmt_insertcomment->bindParam(':created_at', $current_time);
$stmt_insertcomment->execute();
}




  // Get the number of comments for the post
  $stmt_numcomment = $conn->prepare("SELECT COUNT(*) AS num_comments FROM comments WHERE id_post = :id_post");
  $stmt_numcomment->bindParam(':id_post', $id_post);
  $stmt_numcomment->execute();
  $num_comments = $stmt_numcomment->fetch(PDO::FETCH_ASSOC);

// Return the number of likes and the selected reaction type
$response = array(
    'num_comments' => $num_comments['num_comments']
);
echo json_encode($response); 