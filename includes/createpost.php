<?php
// Check if the form has been submitted
if(isset($_POST['create-post'])) {
    // Get the text message and user ID from the form
    $content = $_POST['message'];
    $user_id = $_SESSION['id_session'];
  
    // Set the target directory for the file upload
    $target_dir = "uploads/";
  
    // Get the file information
    $file_name = $_FILES["posts"]["name"];
    $file_tmp = $_FILES["posts"]["tmp_name"];
    $file_type = $_FILES["posts"]["type"];
    $file_size = $_FILES["posts"]["size"];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
  
    // Check if the file is an image or video
    $extensions = array("jpeg","jpg","png","mp4","mov");
  
    // Check if the file is not empty
    if(!empty($file_tmp)){
        if(in_array($file_ext, $extensions) === false){
            $errors[] = "Extension not allowed, please choose a JPEG, JPG, PNG or MP4, MOV file.";
        }
      
        // Check file size
        if($file_size > 2097152) {
            $errors[] = 'File size must be less than 2 MB';
        }
      
        if(empty($errors) == true) {
            // Set the target file path
            $target_file = $target_dir . $file_name;
          
            // Move the file to the target directory
            if (move_uploaded_file($file_tmp, $target_file)) {
                // Insert the post into the database
                $sql = "INSERT INTO posts (content, id_user, media) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$content, $user_id, $target_file]);
                $post_id = $conn->lastInsertId();
                
                // Redirect to the post page
                header("Location: post.php?id=" . $post_id);
                exit();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            print_r($errors);
        }
    } else {
        echo "Error: File not uploaded.";
    }
}
?>

<div class="news-feed news-feed-form">
                       <h3 class="news-feed-title">Create New Post</h3>
                          <form action="" method="POST" enctype="multipart/form-data">
                               <div class="form-group">
                                  <textarea name="message" class="form-control" placeholder="Write something here..."></textarea>
                                <ul class="button-group d-flex justify-content-between align-items-center">
                                      <li class="photo-btn"><label for="photo-btn">  
                                           <i class="flaticon-gallery"></i> Photo</label> 
                                            <input type="file" name="posts" id="photo-btn" class="photo-btn" accept="image/*" style="display: none;">
                                        </li>
                                        <li class="video-btn"><label for="video-btn">  
                                           <i class="flaticon-video"></i> Video </label>
                                            <input type="file" name="posts"  id="video-btn" class="video-btn" accept="video/*" style="display: none;">
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
