<?php

//  conextion de la base de donner
$objetPdo = new PDO('mysql:host=localhost;dbname=petit_annonce', 'root', '');
//bien prendre l id dans l'url
$id = $_GET['id'];
// dis que c'est un entier
$id = intval($id);
// preqpare la requete
$pdoStat = $objetPdo->prepare("DELETE FROM form WHERE id= $id");
// exucution de la requete
$pdoStat->execute();
//chaine de caractere qui previen de la redirection
echo 'Veuiller attendre vous aller être rediriger.';
//delai de 3 seconde pour la redirection
header('Refresh: 3;URL=index.php');
