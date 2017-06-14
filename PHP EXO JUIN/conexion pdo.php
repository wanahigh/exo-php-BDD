<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "toor";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=phpmyadmin", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>