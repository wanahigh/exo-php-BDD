<?php
include('conexionpdo.php');

$Titre=$_POST['Titre'];
$Message=$_POST['Message'];
$picture=$_FILES['Picture'];

$req = $bdd->prepare('INSERT INTO Formulaire(Sujet, Message, Image) VALUES(:Sujet, :Message, :Image)');

$req->execute([

    'Sujet' => $Titre,

    'Message' => $Message,

    'Image' => $picture

]);

header('index.php');