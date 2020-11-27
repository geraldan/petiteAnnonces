<?php

$pdo = new PDO('mysql:dbname=petit_annonce;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
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
