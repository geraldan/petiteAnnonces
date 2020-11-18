<?php

$connect = new PDO('mysql:host=localhost;dbname=petit_annonce','root','');

$pdoStat = $connect->prepare('SELECT * FROM categorie');

$pdoStat->execute();

// maitre les informations dans un tableau
$information = $pdoStat->fetchAll();
?>
<!doctype html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

        <form action="../petiteAnnonces/base.php" method="POST">
           <h1>article form</h1>
           <h3>step 1: identity </h3>
           <div class="box">
               <label class="subtitle">First Name</label>
               <input class="inbox" name="first_name" type="text" required>
           </div>
            <div class="box">
                <label class="subtitle">Name</label>
                <input class="inbox" name="name" type="text" required>
            </div>
            <h3>step 2: contact </h3>
            <div class="box">
                <label class="subtitle">Phone Number</label>
                <input class="inbox" name="phone" type="text" minlength="8" required>
            </div>
            <div class="box">
                <label class="subtitle">Mail</label>
                <input class="mail" type="email" name="mail" required>
            </div>
            <h3>step 3: redaction</h3>
            <div class="box">
            <label for="" class="subtitle">Select theme</label>
            <select name="category">
             <!--le foreach sert a afficher les inforormation il prend la premiere ligne de la table puis la deuxieme et ainsi de suite -->
                     <?php foreach ($information as $cat ): ?>
                     <option value="<?= $cat['category'] ?>"> <?= $cat['category'] ?> </option>
                     <?php endforeach; ?>
            </select>
            </div>
            <div class="box">
                <label for="write" class="lwrite">write to</label><br>
                <textarea name="text_area" class="write" cols="30" rows="10" required></textarea>
            </div>
            <input class="btn"  type="submit">
        </form>
</body>
</html>