<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "emilieviot_projet";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "emilieviot";
$password = "5a1798f311dc7281a54638f13a8bcb31";

$db = new PDO(
    $connexionString,
    $user,
    $password
);