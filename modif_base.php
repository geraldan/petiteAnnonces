<?php

//connection a la basse de donné fasson simplifier en faisant une fichier separer pour ce conetcter a la basse de donnee 'pdo.php' et 'require' pour apeler la page ceci est une fonction integrer a php
require ("pdo.php");
$pdo = (new Connection())->pdo();
var_dump($_POST);
$name = $_POST['name'];
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$category = $_POST['category'];
$text_area = $_POST['text_area'];
$id = $_GET['id'];
//intval force a avoir un entier (int informe que c'est un entier  et val pour valeur)
$id = intval($id);


$sql = $pdo->prepare("UPDATE form SET 
                name = '$name', 
                first_name = '$first_name', 
                phone = '$phone', 
                mail = '$mail', 
                category = '$category', 
                text_area = '$text_area' 
WHERE id = '$id' ");

$sql->execute();
// renvoi ver l'annonce modifie
header('location: http://localhost/petiteAnnonces/liste_annonce.php');

?>
