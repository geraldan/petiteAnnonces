<?php

//connection a la base de donner
$pdo = new PDO('mysql:dbname=petit_annonce;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

//recuperation du donner de formulaire

$name = $_POST['name'];
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$category = $_POST['category'];
$text_ad = $_POST['text_ad'];

// inserer dans la table

$sql = " INSERT INTO form(name, first_name, phone, mail, category, text_ad ) 
VALUES
('$name', '$first_name', '$phone', '$mail', '$categorys', '$text_ad')";

//execution de la requete
$pdo->exec($sql);

header('location: http://localhost/exe-form/affichage_bdd.php');

?>