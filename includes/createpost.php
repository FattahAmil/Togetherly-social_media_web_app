<?php
ob_start();
require_once 'header_Navbar.php';
require_once 'connection.php';

if(isset($_POST['create-post'])) {
  $content = $_POST['message'];
  $user_id = $_SESSION['id_session'];
  
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["posts"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  if(!is_uploaded_file($_FILES['posts']['tmp_name'])) {
    echo "Error: File not uploaded.";
    exit();
}
  if (move_uploaded_file($_FILES["posts"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO posts (content, id_user, media) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$content,$user_id,$target_file]);
    $post_id = $conn->lastInsertId();?>
    <script> location.replace("index.php?id_post=$post_id"); </script>
    <?php
    exit();
    } else {
    echo "Sorry, there was an error uploading your file.";
    }
}
ob_end_flush();
?>
<div class="news-feed news-feed-form">
                       <h3 class="news-feed-title">Create New Post</h3>
                          <form action="" method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                  <textarea name="message" class="form-control" placeholder="Write something here..."></textarea>
                                <ul class="button-group d-flex justify-content-between align-items-center">
                                      <li class="photo-btn"><label for="photo-btn">  
                                           <i class="flaticon-gallery"></i> Photo</label> 
                                            <input type="file" name="posts" id="photo-btn" accept="image/*" style="display: none;">
                                            
                                        </li>
                                        <li class="video-btn"><label for="video-btn">  
                                           <i class="flaticon-video"></i> Video </label>
                                            <input type="file" name="posts"  id="video-btn" accept="video/*" style="display: none;">
                                       
                                        </li>
                                        <li class="tag-btn">
                                            <button type="submit"><i class="flaticon-tag"></i> Tag Friends</button>
                                        </li>
                                        <li class="post-btn">
                                            <button type="submit" name="create-post">Post</button>
                                        </li>
                                    </ul></div>
                                </form>
                            </div>
