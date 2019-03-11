<?php
// A all-use .php to connect to the BBD 
$user = 'root'; 
$pass = 'root'; 

// Connexion à la BBD 
$db = new PDO('mysql:host=localhost;dbname=neoma;charset=utf8',$user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>