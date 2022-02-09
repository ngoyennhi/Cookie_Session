<?php 
// Récupérer la valeur de session_id avant. 
$avant = session_id(); 
// Ouvrir/réactiver la session. 
session_start(); 
// Récupérer la valeur de session_id après. 
$apres = session_id(); 
// Affichage. 
$actuel = date("H:i:s"); 
echo "Heure : ".$actuel."<br />"; 
echo "Avant : ".$avant."<br />"; 
echo "Après : ".$apres ."<br />"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_id</title>
</head>
<body>
    
</body>
</html>