<?php

// Retrieve form data
$id_post = $_POST['id_post'];
$id_user = $_POST['id_user'];
$comment = $_POST['comment'];

// Prepare the SQL query
$stmt = $dbh->prepare("INSERT INTO comments (id_post, id_user, comment, created_at) VALUES (:id_post, :id_user, :comment, NOW())");

// Execute the query with the form data
$stmt->bindParam(':id_post', $id_post);
$stmt->bindParam(':id_user', $id_user);
$stmt->bindParam(':comment', $comment);
$stmt->execute();

// Redirect to the post page
header("Location: showpost.php?id=$id_post"); ?>
<script>
// Send comment form data using Ajax
$.ajax({
  type: "POST",
  url: "addcomment.php",
  data: $("#comment-form").serialize(),
  success: function(response) {
    // Check if comment was successfully added
    if (response == "success") {
      // Clear the comment form
      $("#comment-form")[0].reset();
      // Reload the comment section using another Ajax call
      $.ajax({
        type: "GET",
        url: "comments.php?id=" + <?php echo $id_post; ?>,
        success: function(html) {
          // Replace the existing comment section with the new one
          $("#comments").html(html);
        }
      });
    } else {
      // Display an error message
      $("#comment-error").text("Failed to add comment. Please try again.");
    }
  }
});
</script>
