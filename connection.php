<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=forum;', 'root', '');
}catch(Exception $e){
    die('Ereur : '.$e->getMessage());
}

?>