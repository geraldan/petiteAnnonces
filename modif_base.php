<?php

//connection a la base de donner
$pdo = new PDO('mysql:dbname=petit_annonce;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
var_dump($_POST);
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
