<?php
//connection a la basse de donné avec 'require' en faisant un fichier separer ,
// pour ce connetcter a la basse de donnee 'pdo.php'
require ("pdo.php");
// apelle de la foction pour ce co a la BDD
$pdo = pdo();
//bien prendre l id dans l'url
$id = $_GET['id'];
// dis que c'est un entier
$id = intval($id);
// preqpare la requete
$sql = $pdo->prepare("DELETE FROM form WHERE id= $id");
// exucution de la requete
$sql->execute();
//chaine de caractere qui previen de la redirection
echo 'Veuiller attendre vous aller être rediriger.';
//delai de 3 seconde pour la redirection
header('Refresh: 3;URL=index.php');
