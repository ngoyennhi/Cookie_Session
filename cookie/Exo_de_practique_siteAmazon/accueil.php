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
if ((!isset($_SESSION['visites']['accueil'])) && ($_SESSION['visites']['accueil']<$now) ) { 
  // Variable 'visites' pas encore enregistrée. 
  // => nouvelle session. 
  $_SESSION['visites']['accueil'] = time(); 
  // var_dump($_SESSION['visites']['accueil']); 
  // echo '<br>';
} ;
  // Variable "visites" déjà enregistrée. 
  // arsort — Sort an array in descending order and maintain index association
  arsort($_SESSION['visites']);
  // => ancienne session. 
  $arrPagesVisited = $_SESSION['visites'];
  var_dump($arrPagesVisited);
  //ne stocker que le NOME de pages visites dans $tempsArr 
  $tempsArr = [];
  foreach ($arrPagesVisited  as $key => $value) {
    // $key qui contient les nomes de pages visited
    // $value qui contient 
    $tempsArr[]=$key;
  };
  //afficher 3 derniers pages
  echo 'Page visited:';
  echo '<br>';
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

</body>
</html>