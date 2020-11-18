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
        <h1>Lolllilo</h1>
        <?php foreach ($information as $contact):?>
            <div class="boite">
                <div class="first_name">
                    <p>Nom :
                        <?= $contact[ 'first_name'] ?> </p>
                </div>
                <div class="name">
                    <p> Prénom :
                        <?= $contact['name'] ?> </p>
                </div>
                <div class="phone">
                    <p> mail :
                        <?= $contact[ 'phone']?></p>
                </div>
                <div class="mail">
                    <p> adresse :
                        <?= $contact[ 'mail']?></p>
                </div>
                <div class="category">
                    <p> category :
                        <?= $contact[ 'category']?></p>
                </div>
                <div class="text">
                    <p> texte area :
                        <?= $contact[ 'text_area']?></p>

                </div>

            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>