<?php
session_start();
require('../connection.php');

$getFollowedId=intval($_GET['followedid']);
if ($getFollowedId != $_SESSION['id_session']) {
    $dejaFollowed = $conn->prepare("SELECT * FROM follow Where id_follower= ? and id_following = ?");
    $dejaFollowed->execute(array($_SESSION['id_session'],$getFollowedId));
    $dejaFollowed = $dejaFollowed->rowCount();
    if ($dejaFollowed == 0) {
        $addFollow = $conn->prepare("INSERT INTO follow(id_follower,id_following) value (?,?)");
        $addFollow->execute(array($_SESSION['id_session'],$getFollowedId));
    }else {
        $deletFollow =$conn->prepare("DELETE FROM follow where id_follower= ? and id_following = ?");
        $deletFollow->execute(array($_SESSION['id_session'],$getFollowedId));
    }
    
}

?>