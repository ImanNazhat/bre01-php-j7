<?php

session_start();



require('../config/connexion.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $t = $_GET['t'];
    $query = $db->prepare('INSERT INTO favoris (user_id, annonce_id) VALUES (:user_id, :annonce_id)');
    $parameters = [
        'annonce_id' => $id,
        'user_id' => 1
    ];
    $query->execute($parameters);
    $annonces = $query->fetch(PDO::FETCH_ASSOC);

    var_dump($annonces);
}

// $query = $db->prepare('SELECT * FROM favoris');
// $query->execute();
// $favoris = $query->fetch(PDO::FETCH_ASSOC);
// var_dump($favoris);

// $query = $db->prepare('SELECT * FROM annonces WHERE id = :id');
// $parameters = [
//     'id' => 3,
// ];
// $query->execute($parameters);
// $annonceelo = $query->fetch(PDO::FETCH_ASSOC);

// // var_dump($annonceelo);
