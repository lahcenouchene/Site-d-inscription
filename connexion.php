<?php
try {
// PDO c'est une classe qui permet de faire la connexion vers notre base de donnes 
    $amisbdd=new PDO("mysql:host=localhost;dbname=amisbdd; charset=utf8;","root","");
    //  echo("connexion faite avce succes");
} catch (Exception $th) {
    die("erreur de connexion a la base de donnes ".$th);
}




?>