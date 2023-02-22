<?php


session_start(); // start the session

// check if user is logged in
if (!isset($_SESSION['id_session'])) {
    // redirect to login page or home page
    header('Location: ../login.php');
    exit;
}

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to login page or home page
header('Location: ../login.php');
exit;

?>