<html>
<head>
    <meta charset="utf-8">
    <title>My Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/likes.js"></script>
    <script src="./assets/js/comments.js"></script>
</head>

<?php
$html='';
ob_start(); // Start output buffering

if (isset($_GET['id'])) {
   

    $selected_post = $_GET['id'];

    // Modify the SQL query to fetch only the selected post
    $stmt = $conn->prepare("SELECT id_post, id_user, content, media, DATE_FORMAT(post_date, '%M %d, %Y %H:%i:%S') AS date 
                            FROM posts P, follow F 
                            WHERE P.id_user = F.id_following 
                                AND F.id_follower = :id_follower 
                                AND P.id_post = :selected_post
                            UNION
                            (SELECT id_post, id_user, content, media, DATE_FORMAT(post_date, '%M %d, %Y %H:%i:%S') AS date 
                            FROM posts 
                            WHERE id_user = :id_user
                                AND id_post = :selected_post)
                            ORDER BY date DESC");
    $stmt->bindParam(':id_follower', $_SESSION['id_session']);
    $stmt->bindParam(':id_user', $_SESSION['id_session']);
    $stmt->bindParam(':selected_post', $selected_post);
} else {
    // If the 'selected_post' parameter is not present, fetch all posts as before
    $stmt = $conn->prepare("SELECT id_post, id_user, content, media, DATE_FORMAT(post_date, '%M %d, %Y %H:%i:%S') AS date 
                            FROM posts P, follow F 
                            WHERE P.id_user = F.id_following 
                                AND F.id_follower = :id_follower 
                            UNION
                            (SELECT id_post, id_user, content, media, DATE_FORMAT(post_date, '%M %d, %Y %H:%i:%S') AS date 
                            FROM posts 
                            WHERE id_user = :id_user)
                            ORDER BY date DESC");
    $stmt->bindParam(':id_follower', $_SESSION['id_session']);
    $stmt->bindParam(':id_user', $_SESSION['id_session']);
}
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 ob_start(); // Start output buffering for each post

  $id_post = $row['id_post'];
  $user_id = $row['id_user'];
  $content = $row['content'];
  $media = $row['media'];
  $post_date = $row['date'];

  // Retrieve information about the user who posted the post
  $stmt_user = $conn->prepare("SELECT * FROM users WHERE id_user=:user_id");
  $stmt_user->bindParam(':user_id', $user_id);
  $stmt_user->execute();
  $result_user = $stmt_user->fetch(PDO::FETCH_ASSOC);
  $username = $result_user['nom_user'] . ' ' . $result_user['prenom_user'];
  $profile_image = $result_user['imgprfl_user'];

  // Retrieve the number of likes for the post
  $stmt_numlike = $conn->prepare("SELECT COUNT(*) FROM likes WHERE id_post = :id_post");
  $stmt_numlike->bindParam(':id_post', $id_post);
  $stmt_numlike->execute();
  $num_likes = $stmt_numlike->fetchColumn();

  

// Check if the user has already liked the post
$id_user = $_SESSION['id_session']; 
$stmt_like = $conn->prepare("SELECT * FROM likes WHERE id_post = :id_post AND id_user = :id_user");
$stmt_like->bindParam(':id_post', $id_post);
$stmt_like->bindParam(':id_user', $id_user);
$stmt_like->execute();
$like = $stmt_like->fetch(PDO::FETCH_ASSOC);


  // Get the number of comments for the post
  $stmt_numcomment = $conn->prepare("SELECT COUNT(*) AS num_comments FROM comments WHERE id_post = :id_post");
  $stmt_numcomment->bindParam(':id_post', $id_post);
  $stmt_numcomment->execute();
  $num_comments = $stmt_numcomment->fetchColumn();


  // Display the post ?>
  <div class='news-feed news-feed-post'>
  <div class='post-header d-flex justify-content-between align-items-center'>
  <div class='image'>
 <?php if (!empty($profile_image)) { ?>
    <a href="<?php if ($user_id==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$user_id;
    } ?>"><img src='<?php echo $profile_image ;?>' class='rounded-circle' alt='Profile Image' style="width:60px;height:60px;"  ></a>
 <?php } ?>
 </div>
  <div class='info ms-3'>
  <span class='name'><a href='<?php if ($user_id==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$user_id;
    } ?>'><?php echo $username ;?></a></span>
  <span class='small-text'><a href='<?php if ($user_id==$_SESSION['id_session']) {
        echo 'my-profile.php';
    }else {
        echo 'profile.php?id='.$user_id;
    } ?>'><?php echo $post_date;?></a></span>
  </div>
  <div class='dropdown'>
  <button class='dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='flaticon-menu'></i></button>
  <ul class='dropdown-menu'>
  <li><a class='dropdown-item d-flex align-items-center' href='#'><i class='flaticon-edit'></i> Edit Post</a></li>
  <li><a class='dropdown-item d-flex align-items-center' href='#'><i class='flaticon-private'></i> Hide Post</a></li>
  <li><a class='dropdown-item d-flex align-items-center' href='#'><i class='flaticon-trash'></i> Delete Post</a></li>
  </ul>
  </div>
  </div>
                                <div class="post-body">
                                    <p><?php echo $content;  ?></p>
                                    <div class="post-image" style="text-align: center;">
                                    <?php if (!empty($media)) {
                                    if (pathinfo($media, PATHINFO_EXTENSION) === 'mp4') { ?>
                                    
                                       <video style="max-width: 100%;height: auto;display: inline-block;" controls><source src='./action/uploads/<?php echo $media ;?>' type='video/mp4'></video>
                                 <?php  } else { ?>
                                       <img src='./action/uploads/<?php echo $media ;?>'>
                                    <?php }
                                 }
                                 ?>
                                    </div>
                                    <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                                        
                                        <li class="post-react">
                                        <a class="like-button" style="cursor:pointer;" data-type='like' data-post-id="<?php echo $row['id_post']; ?>"
                                         onclick="addLike(<?php echo $row['id_post']; ?>, 'like')" a>
                                            <i id="isLiked-<?php echo $row['id_post'];?>" class="<?php if (!$like){  
                                            echo "bi bi-hand-thumbs-up";}else {
                                            echo "bi bi-hand-thumbs-up-fill";
                                            }?>" ></i>
                                            <span>Like</span>
                                            <span id="numberlike-<?php echo $row['id_post'];?>" class="number"><?php echo $num_likes; ?></span>
                                        </a>
                                        
                                        <ul class="react-list">
                                        <li>
                                            <a  data-type="like"  data-post-id="<?php echo $row['id_post']; ?>"
                                             onclick="addLike(<?php echo $row['id_post']; ?>, 'like')">
                                                <img src="assets/images/react/react-1.png" alt="Like">
                                            </a>
                                        </li>
                                        <li>
                                            <a data-type="love" data-type="love" data-post-id="<?php echo $row['id_post']; ?>"
                                               onclick="addLike(<?php echo $row['id_post']; ?>, 'love')">
                                                <img src="assets/images/react/react-2.png" alt="Love">
                                            </a>
                                        </li>
                                        <li>
                                            <a data-type="thankful" data-post-id="<?php echo $row['id_post']; ?>"
                                             onclick="addLike(<?php echo $row['id_post']; ?>, 'thankful')">
                                                <img src="assets/images/react/react-3.png" alt="thankful">
                                            </a>
                                        </li>
                                        <li>
                                            <a data-type="haha" data-post-id="<?php echo $row['id_post']; ?>"
                                             onclick="addLike(<?php echo $row['id_post']; ?>, 'haha')">
                                                <img src="assets/images/react/react-7.png" alt="haha">
                                            </a>
                                        </li>
                                        <li>
                                            <a data-type="wow" data-post-id="<?php echo $row['id_post']; ?>"
                                             onclick="addLike(<?php echo $row['id_post']; ?>, 'wow')">
                                                <img src="assets/images/react/react-4.png" alt="Wow">
                                            </a>
                                        </li>
                                        <li>
                                            <a data-type="sad" data-post-id="<?php echo $row['id_post']; ?>"
                                             onclick="addLike(<?php echo $row['id_post']; ?>, 'sad')">
                                                <img src="assets/images/react/react-5.png" alt="Sad">
                                            </a>
                                        </li>
                                        <li>
                                            <a data-type="angry" data-post-id="<?php echo $row['id_post']; ?>"
                                             onclick="addLike(<?php echo $row['id_post']; ?>, 'angry')">
                                                <img src="assets/images/react/react-6.png" alt="Angry">
                                            </a>
                                        </li>
                                        </ul>
                                        </li>
                                        <li class="post-comment">
                                            <a><i class="flaticon-comment"></i><span>Comment</span> <span class="number" id="number-comment<?php echo $row['id_post']; ?>"><?php echo $num_comments; ?> </span></a>
                                        </li>
                                        <li class="post-share">
                                            <a href="#"><i class="flaticon-share"></i><span>Share</span> <span class="number">24 </span></a>
                                        </li>
                                    </ul>
                                    <div class="post-comment-list" id="post-comment-list-<?php echo $row['id_post'];?>">
                                      <?php
                                          // Fetch comments for a post from the database
                                          $stmt_comments = $conn->prepare("SELECT id_user,DATE_FORMAT(created_at, '%M %d, %Y %H:%i:%S') AS created1_at,comment,id_post FROM comments WHERE id_post = :id_post ORDER BY created_at DESC limit 3 ");
                                          $stmt_comments->bindParam(':id_post', $id_post);
                                          $stmt_comments->execute();
                                          $comments = $stmt_comments->fetchAll(PDO::FETCH_ASSOC);

                                          // Loop through comments and display them
                                          foreach ($comments as $comment) {
                                              $stmt_user = $conn->prepare("SELECT * FROM users WHERE id_user = :id_user");
                                              $stmt_user->bindParam(':id_user', $comment['id_user']);
                                              $stmt_user->execute();
                                              $user = $stmt_user->fetch(PDO::FETCH_ASSOC);
                                      ?>

                                      <div class="comment-list">
                                          <div class="comment-image">
                                              <a href="<?php if ($user['id_user']==$_SESSION['id_session']) {
                                                        echo 'my-profile.php';
                                                    }else {
                                                        echo 'profile.php?id='.$user['id_user'];
                                                    } ?>"><img src="<?php echo $user['imgprfl_user']; ?>" class="rounded-circle" alt="image" style="width:50px;height:50px;"></a>
                                              </div>
                                          <div class="comment-info">
                                              <h3><a href="<?php if ($user['id_user']==$_SESSION['id_session']) {
                                                    echo 'my-profile.php';
                                                }else {
                                                    echo 'profile.php?id='.$user['id_user'];
                                                } ?>"><?php echo $user['prenom_user']." ".$user['nom_user']; ?></a></h3>
                                              <span><?php echo $comment['created1_at']; ?></span>
                                              <p><?php echo $comment['comment']; ?></p>
                                              <ul class="comment-react">
                                                  <li><a href="#" class="like">Like(2)</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <?php } ?>
                                
                                    </div>
                                    <form class="post-footer" action="" method="POST" id="comment-form">
                                        <div class="footer-image">
                                            <a href="<?php if ($user['id_user']==$_SESSION['id_session']) {
                                                echo 'my-profile.php';
                                            }else {
                                                echo 'profile.php?id='.$user['id_user'];
                                            } ?>"><img src="<?php echo $rowIdSession['imgprfl_user'] ;?>" class="rounded-circle" alt="image" width="60"></a>
                                        </div>
                                            <div class="form-group">
                                                <textarea id="content-of-comment-<?php echo $row['id_post']; ?>" name="content-of-comment" class="form-control" placeholder="Write a comment..."></textarea>
                                               <!-- <input type="hidden" name="id_post" value="// echo $row['id_post']; "> -->
                                                <label>
                                                    <a onclick="addcomments(<?php echo $row['id_post']; ?>,document.getElementById('content-of-comment-<?php echo $row['id_post']; ?>') )">
                                                        <i class="bi bi-send-fill" style="cursor:pointer;"> </i>
                                                    </a>
                                                </label>
                                            </div>
                                        </form>
                                    </form>
                                </div>
 </div> <?php
 $postHtml = ob_get_clean(); // Get the generated HTML for the post
 $html .= $postHtml; // Append the post HTML to the $html variable

}
ob_end_clean(); // Clean and end output buffering
echo $html;
?>
