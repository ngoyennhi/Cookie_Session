<!-- N’oubliez pas d’appeler la fonction session_start pour pouvoir manipuler les données de session à l’aide du tableau $_SESSION. -->
<?php 
// Ouvrir/réactiver la session. 
session_start(); 
// Enregistrer deux informations dans la session.

$_SESSION['prenom'] = 'Olivier'; 

$_SESSION['informations'] =array('prenom'=>'Olivier','nom'=>'TOM'); // c'est un tableau... 

?> 
<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8" />  
    <title>Page 1</title> 
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 
    <title>Page 1</title>
  </head> 
  <body> 
    <div><a href="page2.php">Page 2</a></div> 
  </body> 
</html>