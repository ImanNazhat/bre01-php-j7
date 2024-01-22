<?php

require "config/connexion.php";

$query = $db->prepare('SELECT id, password FROM users');
$query->execute();

$users = $query->fetchAll(PDO::FETCH_ASSOC);

$hashedPasswords = [];

foreach ($users as $user) { 
    $hashedPassword = password_hash($user['password'],PASSWORD_DEFAULT);
    $hashedPasswords[] = $hashedPassword;
}

foreach ($hashedPasswords as $hashedPassword) {
    echo $hashedPassword . "<br>";
}

?>