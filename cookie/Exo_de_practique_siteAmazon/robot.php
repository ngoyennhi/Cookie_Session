
<?php session_start();

// c'est un tableau... 
// a chaque fois on visite la page, on va mettre le temps comme un indicateur dans le tableau
// page c'est un tableau
// nomPage c'est un index dans le tableau
$_SESSION['page']['robot'] = time();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot</title>
</head>
<body>
<h1>Robot</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>
</body>
</html>

