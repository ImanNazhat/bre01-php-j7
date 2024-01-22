<?php 

var_dump($_POST);

$email = $_POST["email"];
$password = $_POST["password"];

require('../config/connexion.php');
$query = $db->prepare('SELECT * FROM users WHERE email=:email');
$parameters = [
    'email' => $email
    ];
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

var_dump($user['password']);
var_dump($password);


if ($user && password_verify($password, $user['password'])) {
    header('Location: ../index.php/?route=catalogue');
} else {
    echo "Identifiants incorrects";
}

?>
