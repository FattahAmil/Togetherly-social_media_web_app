<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=forum;', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die('Ereur : '.$e->getMessage());
}

?>