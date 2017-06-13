<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', 'toor');

}

catch(Exception $e)

{

    die('Erreur : '.$e->getMessage());

}

?>