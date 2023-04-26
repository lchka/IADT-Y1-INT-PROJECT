<?php
require "./etc/config.php";
$all=Story::findAll();
$stories=Story::findbyCategory($_GET["category_id"],10);
try {
    
} catch (Exception $e) {
    echo $e->getMessage();
}


$stories;



?>