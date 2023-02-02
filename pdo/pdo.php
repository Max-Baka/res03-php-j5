<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "maximelanglois_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "maximelanglois";
$password = "3271f1e709a1fa0d856fafa41a3fbe83";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
?>