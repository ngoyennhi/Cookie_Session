<?php session_start();

$_SESSION['page']['montre'] = time(); 
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montre</title>
</head>
<body>
<h1>Montre</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>
</body>
</html>


