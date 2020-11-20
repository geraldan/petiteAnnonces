<?php
//connection a la base de donner
$pdo = new PDO('mysql:dbname=petit_annonce;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/* requête le 'desc limit' cible le dernier article crée */
$sql = $pdo->query("SELECT * FROM form ORDER BY id DESC LIMIT 6");

$sql->execute();

$information = $sql->fetchALL();

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>
    <div>
        <h1>LES DERNIERES PETITES ANNONCES</h1>
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
                <a class="btn" href="annonce.php?id=<?= $contact['id'] ?> ">plus d'information</a>
            </div>
        <?php endforeach; ?>

    </div>
</body>
</html>