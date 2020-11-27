<?php
//conection a la base de donnee
$connect = new PDO('mysql:host=localhost;dbname=petit_annonce','root','');
//recupaire l'id dans l'url
$id = $_GET['id'];
//transforme la valeur en entier
$id = intval($id);
// selectionne tout de la table form ou l'id est = $id( selectionne le bonne id donc permer dans predre la bonne annonce)
$sql = $connect->prepare("SELECT * FROM form WHERE id = '$id' ");

$sql->execute();

$contact = $sql->fetch();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div>
    <h1>LES PETITES ANNONCES</h1>
    <a class="btn" href="index.php">accueil</a>

        <div class="boites">
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

            <a class="btn" href="suprimer.php?id=<?= $contact['id'] ?> ">Supprimer</a>
            <a class="btn" href="modifier.php?id=<?= $contact['id'] ?> ">Modifier</a>

        </div>


        <div>
            <hr>

        </div>
</div>
</body>
</html>
