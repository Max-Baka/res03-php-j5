<?php
require './user.php';



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
$userTab = [
    "firstName" => "Clark",
    "lastName" => "Kent",
    "email" => "clark.kent@test.fr"
];

$clark = new User($userTab["firstName"], $userTab["lastName"], $userTab["email"]);
var_dump($clark);

$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query ->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
var_dump($user);

$newUser = new User($user["first_name"],$user["last_name"],$user["email"]);
$newUser-> setId($user["id"]);
var_dump($newUser);
?>