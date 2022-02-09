<?php 
// Appel à session_start. 
session_start();
// Affichage. 
echo '$_SESSION["prenom"] = ', 
isset($_SESSION["prenom"])?$_SESSION["prenom"]:'', 
'<br />'; 
echo '$_SESSION["informations"]["nom"] = ', 
 isset($_SESSION["informations"]["nom"])? $_SESSION["informations"]["nom"]:'', 
'<br />'; 
?>