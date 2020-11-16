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
        <h1>article form</h1>
        <form action="base.php" method="POST">
           <h3>step 1: identity </h3>
           <div class="box">
               <label>First Name</label>
               <input name="first_name" type="text">
            </div>
            <div class="box">
                <label>Name</label>
                <input name="name" type="text">
            </div>
            <h3>step 2: contact </h3>
            <div class="box">
                <label>Phone Number</label>
                <input name="phone" type="text">
            </div>
            <div class="box">
                <label>Mail</label>
                <input name="mail" type="text">
            </div>
            <h3>step 3: redaction</h3>
            <div class="box">
            <label for="">Selection du theme</label>
            <select>
             <!--le foreach sert a afficher les inforormation il prend la premiere ligne de la table puis la deuxieme et ainsi de suite -->
                     <?php foreach ($information as $cat ): ?>
                     <option> <?= $cat['category'] ?> </option>
                     <?php endforeach; ?>
            </select>
            </div>
            <div>
                <label for="write" class="lwrite">write to</label><br>
                <textarea name="text_area" class="write" cols="30" rows="10"></textarea>
            </div>
        </form>
</html>