<?php

$pdo = new PDO('mysql:dbname=form;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$name = $_POST['name'];
$first_name = $_POST['first_name'];
$mail = $_POST['mail'];
$city = $_POST['city'];
$adress = $_POST['adress'];
$id = $_GET['id'];
//intval force a avoir un entier
$id = intval($id);


$sql = $pdo->prepare("UPDATE user SET name = '$name', first_name = '$first_name', mail = '$mail', adress = '$adress', city = '$city' WHERE id = '$id' ");

$sql->execute();

header('location: http://localhost/exe-form/annonce.php');

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

</body>
</html>
