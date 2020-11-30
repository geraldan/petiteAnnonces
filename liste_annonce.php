<?php
//connection a la basse de donné fasson simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
require ("pdo.php");
$pdo = pdo();
//recupaire les information de la base de donné. (select *) selectionne tout le tableu de la base de donné et (FROM)veux dire de (form)selectionne la table du tableu
$sql = $pdo->query("SELECT * FROM form");

//execute la requete
$sql->execute();
//tout afficher dans un tableau
$information = $sql->fetchALL();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>liste des annonces</title>
</head>
<body>
<div>
    <h1>LES PETITES ANNONCES</h1>
    <?php foreach ($information as $contact):?>
        <div class="boite">
            <hr>

            <p class="test">Nom :
                <?= $contact[ 'first_name'] ?> </p>

            <p> category :
                <?= $contact[ 'category']?></p>

            <p> texte area :
                <?= $contact[ 'text_area']?></p>

            <p> Prénom :
                <?= $contact['name'] ?> </p>

            <p> mail :
                <?= $contact[ 'phone']?></p>

            <p> adresse :
                <?= $contact[ 'mail']?></p>
<!--lien vers annonce php en lien avec lid en vois moi sur l'annonce selectionner-->
            <a href="annonce.php?id=<?= $contact['id'] ?> ">plus d'information</a>


        </div>
    <?php endforeach; ?>
   <h2>
        <a href="index.php">Les dernieres petites annonces </a>
   </h2>
</div>
</body>

</html>
