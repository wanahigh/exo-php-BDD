<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP exo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>


</head>
<body>



<nav class="navbar-inverse">
    <a href="index.php"> remplir le formulaire</a>
    <a href="affichage.php">verifier les réponses</a>
</nav>
    
    
    
  <div class="container">
    <div class="input-group">
        <form action="cible.php" method="post">
        <span class="input-group-addon" id="basic-addon1"></span>
        <input class="form-control" name="Titre"   value="" required type="text"/>
        <input class="form-control" name="Message" value="" required type="text">
        <input class="form-control" name="Picture" value="" type="file">
        <input class="btn btn-danger" type="submit">
        </form>
    </div>
  </div>
</body>


</html>
