<?php
session_start();
include('../connection.php');
if (isset($_POST['submit'])) {
if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email=$_POST['email'];
    $pass=$_POST['password'];
$req = $conn->prepare('SELECT * FROM users WHERE email_user = ? AND pass_user = ? ');
$req->execute(array($email,$pass));
$controle=$req->fetch();
if ($controle) {
    $id=$controle['id_user'];
  $_SESSION['id_session']=$id;
  header("location:../index.php");
  exit;
}
}
header("location:../login-page.php");
}
?>