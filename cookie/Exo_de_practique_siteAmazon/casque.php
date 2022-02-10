<?php session_start();

$_SESSION['page']['casque'] = time(); 
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casque</title>
</head>
<body>
   <h1>Casque</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>
</body>
</html>
