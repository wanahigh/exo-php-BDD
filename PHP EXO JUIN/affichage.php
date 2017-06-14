<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP exo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css"/>
    <script src="js/bootstrap.js" ></script>
</head>
<body>

<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="affichage.php">Afficher le journal</a>
            <a class="brand" href="index.php">Ecrire un article</a>
        </div>
    </div>
</div>


<?php
include('conexion pdo.php');

$reponse = $bdd->query('SELECT * FROM Formulaire');
$rep = $reponse->fetchAll();
// var_dump($reponse1);
foreach ($rep as $value) {
    echo '<p>Titre : '.$value->Sujet.'</p><img src="./upload/' . $value->Image .'"> <p> Article : ' . $value->Message . '</p><hr>';
}

?>
</body>
</html>