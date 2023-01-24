<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=forums;', 'root', '');
}catch(Exception $e){
    die('Ereur : '.$e->getMesage());
}

?>