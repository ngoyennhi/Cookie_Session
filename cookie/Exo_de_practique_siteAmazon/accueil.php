<?php session_start(); // à mettre tout en haut de page
// c'est un tableau... 
// a chaque fois on visite la page, on va mettre le temps comme un indicateur dans le tableau
// page c'est un tableau
// nomPage c'est un index dans le tableau
$_SESSION['page']['accueil'] = time(); 
var_dump($_SESSION);
//$_SESSION['informations'] =array('page1'=>'souris','page2'=>'robot'); 
$_SESSION['page']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site AmaNhi </title>
</head>
<body>
    <h1>Wellcome to site AmaNhi</h1>
<ul>
        <li><a href="souris.php">Souris</a></li>
        <li><a href="robot.php">Robot</a></li>
        <li><a href="alteres.php">Altères</a></li>
        <li><a href="casque.php">Casque</a></li>
        <li><a href="chaussures.php">Chaussures</a></li>
        <li><a href="bracelet.php">Bracelet</a></li>
        <li><a href="montre.php">Montre</a></li>
    </ul>
</body>
</html>