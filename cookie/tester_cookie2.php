<?php 
// Tester si c'est le deuxième appel de la page. 
if (! isset($_GET['retour'])) { 
  // Non... 
  // Déposer le cookie. 
  setcookie('test[0]','zéro'); 
  setcookie('test[1]','un'); 
  // Et recharger la page avec une information dans 
  // l'URL indiquant que c'est le deuxième passage. 
  header('Location: tester_cookie2.php?retour=1'); 
} else { 
  // Oui... 
  // Tester si le cookie est "revenu". 
  if (isset($_COOKIE['test'])) { // oui... 
    echo 'Cookie accepté<br />'; 
    var_dump($_COOKIE['test']); 
  } else { // non... 
    echo 'Cookie refusé'; 
  } 
} 
?>

<!-- setcookie(
    string $name,
    string $value = "",
    int $expires_or_options = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
): bool -->