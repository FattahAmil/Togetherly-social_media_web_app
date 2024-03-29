<?php
session_start();
require_once('../connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['message'])) {
        
        $message = $_POST['message'];
        $tagged_friends = !empty($_POST['tagged_friends']) ? $_POST['tagged_friends'] : null;
        $media = null;

        if (!empty($_FILES['photo']['name'])) {
            $media = $_FILES['photo']['name'];
            move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $media);
        }

        if (!empty($_FILES['video']['name'])) {
            $media = $_FILES['video']['name'];
            move_uploaded_file($_FILES['video']['tmp_name'], 'uploads/' . $media);
        }
        
        $id_user = $_SESSION['id_session'];
        $stmt = $conn->prepare("INSERT INTO posts (id_user, content, media, post_date) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$id_user, $message, $media]);
        
        header('location:'.$_SERVER["HTTP_REFERER"]);
        
    } else {
       
        
        header('location:'.$_SERVER["HTTP_REFERER"]);
    }
}
?>
