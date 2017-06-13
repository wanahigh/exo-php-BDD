<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP exo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>




<nav class="nav navbar-inverse">
    <a href="index.php"> remplir le formulaire</a>
    <a href="affichage.php">verifier les réponses</a>
</nav>



<?php
include('conexionpdo.php');

/* Exécute une requête préparée en passant un tableau de valeurs */
$sth = $dbh->prepare('SELECT *
    FROM Formulaire');
$sth->execute(array());
$red = $sth->fetchAll();


/// On récupère tout le contenu de la table jeux_video

?>


<button btn btn-danger">Vérifier</button>

</body>
</html>