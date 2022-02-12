<?php 
// c'est un tableau... 
// a chaque fois on visite la page, on va mettre le temps comme un indicateur dans le tableau
// page c'est un tableau
// nomPage c'est un index dans le tableau

// Ouvrir/réactiver la session. 
session_start(); 
// Tester si la session est nouvelle (cad ouverte par 
// l’appel session_start() ci-dessus) ou ancienne (cad ouverte 
//par un appel antérieur à session_start()). 
// Le mieux est de tester si une de nos variables de session 
// est déjà enregistrée. 
echo ('toto');
$now = time();
//if ((!isset($_SESSION['visites']['souris'])) && ($_SESSION['visites']['souris']<$now)) { 
  if ((!isset($_SESSION['visites']['souris'])) OR ($_SESSION['visites']['souris']<$now)) { 
  // Variable 'visites' pas encore enregistrée. 
  // => nouvelle session. 
  $_SESSION['visites']['souris'] = time(); 
  include('affichage.php');
} else {
    // Variable "visites" déjà enregistrée. 
  include('affichage.php');
}
  
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souris</title>
</head>
<body>
<h1>Souris</h1>
    <p>
        <a href="accueil.php">Retour</a>
    </p>
    <p><a href="<?php echo 'destroy.php'; ?>">Destruction de la session</a></p>
</body>
</html>
