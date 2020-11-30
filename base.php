<?php

//connection a la basse de donné fasson simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
require ("pdo.php");
$pdo = pdo();
//recuperation du donner de formulaire

$name = $_POST['name'];
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$category = $_POST['category'];
$text_area = $_POST['text_area'];

// inserer dans la table

$sql = " INSERT INTO form (name, first_name, phone, mail, category, text_area ) 
VALUES
('$name', '$first_name', '$phone', '$mail', '$category', '$text_area')";

//execution de la requete
$pdo->exec($sql);

?>