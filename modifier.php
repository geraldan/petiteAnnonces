<?php
//connection a la basse de donné fasson simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
require ("pdo.php");
$pdo = pdo();

//on recupaire l'id dans l'url
$id = $_GET['id'];
// mes en entier
$id = intval($id);
//de la ligne 11 a 17 recuperation du formulaire en fonction de l'id
// prepare la requete
$pdoStat = $pdo->prepare("SELECT * FROM form WHERE id= $id ");
// execute la requete
$pdoStat->execute();
// afficher tout la table
$information = $pdoStat->fetch();
//de la lige 17 a 23 recuperation de la table catégorie
//recuperation du select
$sql = $pdo->prepare("SELECT * FROM categorie ");
// execute la requete
$sql->execute();
// afficher tout la table
$cats = $sql->fetchAll();

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>modifier</title>
</head>
<body>

<!-- action de form definie -->
<form action="../petiteAnnonces/modif_base.php?id=<?=$id?>" method="POST">
    <h1>Modification </h1>
    <h3>step 1: Identité </h3>
    <div class="box">
        <label class="subtitle">Prénom</label>
        <!--value recupaire et intgre les info de la base de donne dans input-->
        <input  value="<?= $information[ 'first_name'] ?>" class="inbox" name="first_name" type="text" required>
    </div>
    <div class="box">
        <label class="subtitle">Nom</label>
        <input  value="<?= $information[ 'name'] ?>" class="inbox" name="name" type="text" required>
    </div>
    <h3>step 2: Contacte </h3>
    <div class="box">
        <label class="subtitle">Numéro Téléphone</label>
        <input  value="<?= $information[ 'phone'] ?>" class="inbox" name="phone" type="text" minlength="8" required>
    </div>
    <div class="box">
        <label class="subtitle">Mail</label>
        <input  value="<?= $information[ 'mail'] ?>" class="mail" type="email" name="mail"  required>
    </div>
    <h3>step 3: rédaction</h3>
    <div class="box">
        <label for="" class="subtitle">Sélection de theme</label>
        <select name="category">
            <!--le foreach sert a afficher les inforormation il prend la premiere ligne de la table puis la deuxieme et ainsi de suite -->
            <?php foreach ($cats as $cat ): ?>
                <option value="<?= $cat['category'] ?>"> <?= $cat['category'] ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="box">
        <label for="write" class="lwrite">Détail de l'annonce</label><br>
        <textarea <?= $information['text_area'] ?> name="text_area" class="write" cols="30" rows="10" required><?= $information['text_area'] ?></textarea>
    </div>
    <input class="sub"  type="submit">
</form>

</body>
</html>