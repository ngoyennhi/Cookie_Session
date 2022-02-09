<?php 
// Tester si c’est le deuxième appel de la page. 
if (! isset($_GET['retour'])) { 
  // Non... 
  // Déposer le cookie. 
  setcookie('test','test'); 
  // Et recharger la page avec une information dans 
  // l’URL indiquant que c’est le deuxième passage. 
  header('Location: tester_cookie.php?retour=1'); 
} else { 
  // Oui... 
  // Tester si le cookie est "revenu". 
  if (isset($_COOKIE['test'])) { // oui... 
    echo 'Cookie accepté'; 
  } else { // non... 
    echo 'Cookie refusé'; 
  } 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie or not cookie</title>
</head>
<body>
    
</body>
</html>