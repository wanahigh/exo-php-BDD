<?php

include('conexion pdo.php');


$titre=$_POST['Titre'];
$message=$_POST['Message'];
$image=$_POST['Image'];

$req = $bdd->prepare('INSERT INTO Formulaire(Sujet, Message, Image) VALUES(:Sujet, :Message, :Image)');
$req->execute(array(
    'Sujet' => $titre,
    'Message' => $message,
    'Image' => $image

));
header('Location: index.php');
?>


