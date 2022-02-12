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
$now = time();
if ((!isset($_SESSION['visites']['robot'])) && ($_SESSION['visites']['robot']<$now) ) { 
  // Variable 'visites' pas encore enregistrée. 
  // => nouvelle session. 
  $_SESSION['visites']['robot'] = time(); 

} ;
  // Variable "visites" déjà enregistrée. 
  // arsort — Sort an array in descending order and maintain index association
  arsort($_SESSION['visites']);
  // => ancienne session. 
  //var_dump($_SESSION['visites']); 
  $arrPagesVisited = $_SESSION['visites'];
  //ne stocker que le NOME de pages visites dans $tempsArr 
  $tempsArr = [];
  foreach ($arrPagesVisited  as $key => $value) {
    // $key qui contient les nomes de pages visited
    // $value qui contient 
    $tempsArr[]=$key;
 
  };
  //afficher 3 derniers pages
  for ($pagesVisited = 0; $pagesVisited <= 2; $pagesVisited++) {
    echo $tempsArr[$pagesVisited];
    echo '<br>';} ;
    session_destroy();
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
    <p><a href="<?php echo 'destroy.php'; ?>">Destruction de la session</a></p>
</body>
</html>

