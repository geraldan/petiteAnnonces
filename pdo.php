<?php
//  conection de la base de donner
function pdo(){
    return new PDO('mysql:host=localhost;dbname=petit_annonce', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}