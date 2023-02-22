<?php
require_once 'connection.php';

$stmt = $conn->query("SELECT * FROM posts ORDER BY post_date DESC");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $post_id = $row['id_post'];
  $user_id = $row['id_user'];
  $content = $row['content'];
  $media = $row['media'];
  $post_date = $row['post_date'];

  // Retrieve information about the user who posted the post
  $stmt_user = $conn->prepare("SELECT * FROM users WHERE id_user=:user_id");
  $stmt_user->bindParam(':user_id', $user_id);
  $stmt_user->execute();
  $result_user = $stmt_user->fetch(PDO::FETCH_ASSOC);
  $username = $result_user['nom_user'] . ' ' . $result_user['prenom_user'];
  $profile_image = $result_user['imgprfl_user'];

  // Display the post
  echo "<div class='news-feed news-feed-post'>";
  echo "<div class='post-header d-flex justify-content-between align-items-center'>";
  echo "<div class='image'>";
  if (!empty($profile_image)) {
    echo "<a href='my-profile.html'><img src='$profile_image' class='rounded-circle' alt='Profile Image'></a>";
  }
  echo "</div>";
  echo "<div class='info ms-3'>";
  echo "<span class='name'><a href='my-profile.html'>$username</a></span>";
  echo "<span class='small-text'><a href='#'>$post_date</a></span>";
  echo "</div>";
  echo "<div class='dropdown'>";
  echo "<button class='dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='flaticon-menu'></i></button>";
  echo "<ul class='dropdown-menu'>";
  echo "<li><a class='dropdown-item d-flex align-items-center' href='#'><i class='flaticon-edit'></i> Edit Post</a></li>";
  echo "<li><a class='dropdown-item d-flex align-items-center' href='#'><i class='flaticon-private'></i> Hide Post</a></li>";
  echo "<li><a class='dropdown-item d-flex align-items-center' href='#'><i class='flaticon-trash'></i> Delete Post</a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</div>";
  echo "<div class='post-content'>$content</div>";
  if (!empty($media)) {
    if (pathinfo($media, PATHINFO_EXTENSION) === 'mp4') {
      echo "<video controls><source src='$media' type='video/mp4'></video>";
    } else {
      echo "<img src='$media'>";
    }
  }
  echo "</div>";
}
?>