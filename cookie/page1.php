<?php 
// Valeur du cookie avant. 
$avant = (isset($_COOKIE ['heure']))?$_COOKIE ['heure']:''; 
// Dépôt du cookie expirant à la fin de la session. 
$ok = setcookie('heure',date('H:i:s')); 
// Valeur du cookie après. 
$après = (isset($_COOKIE ['heure']))?$_COOKIE ['heure']:''; 
// Heure actuelle. 
$actuel = date('H:i:s'); 
// Affichage. 
echo "Actuel : ".$actuel."<br />"; 
echo "Avant : ".$avant."<br />"; 
echo "Après : ".$après."<br />"; 
?>
<?php  
// Premier cookie expirant à la fin de la session. 
$ok1 = setcookie('prenom','toto'); 

// // Deuxième cookie expirant dans 30 jours. 
// $ok2 = setcookie('nom','titi',time()+(30*24*3600)); 

// Deuxième cookie expirant dans 10s. 
$ok2 = setcookie('nom','titi',time()+5*60); 

// Résultat. 
if ($ok1 && $ok2) { 
   $message = 'Cookies déposés (du moins, a priori)'; 
} else { 
   $message = "L'un des cookies n'a pas pu être déposé"; 
} 
?> 
<!DOCTYPE html>  
<html>  
  <head><meta charset="utf-8"/><title>Page 1</title></head>  
  <body> 
    <div> 
    <?php echo $message; ?><br/> 
    <!-- lien vers la page 2 --> 
    <a href="page2.php">Page 2</a> 
    </div> 
  </body> 
</html>