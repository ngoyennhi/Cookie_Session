<?php 
session_start(); 
// Afficher les trois derniers articles consultés
include('affichage.php');
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
    <p><a href="<?php echo 'destroy.php'; ?>">Destruction de la session</a></p>
    <br>
    <?php
echo 'Vous utilisez un navigateur de type: ';
if (preg_match('/MSIE/', $_SERVER["HTTP_USER_AGENT"])) {
    echo "Internet explorer";
} else if (preg_match('/^Mozilla\//', $_SERVER["HTTP_USER_AGENT"])) {
    echo "Netscape";
} else if (preg_match('/^Opera\//', $_SERVER["HTTP_USER_AGENT"])) {
    echo "Opera";
} else if (preg_match('/^Safari\//', $_SERVER["HTTP_USER_AGENT"])) {
  echo "Safari";
}
else {
    echo "inconnu";
}
?>
</body>
</html>