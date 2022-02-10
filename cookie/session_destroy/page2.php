<!-- Dans la deuxième page, la donnée de session n’est pas encore supprimée si l'on utilise cette partie de code au dessous  -->
<!-- <?php 
    // Ouvrir/réactiver la session. 
    session_start(); 
    // Détruire la session. 
    session_destroy(); 
?> -->
<!-- <!DOCTYPE html>   -->
<!-- <html>  
        <head> 
            <meta charset="utf-8"/> 
        </head> 
        <body> 
    <div> 
        <b>Page 2</b><br/> 
<?php  
echo 'Bonjour '.$_SESSION["nom"].'<br />'; 
echo 'session_id() = '.session_id().'<br />'; 
?>
<a href="page3.php">Page 3</a><br /> 
     </div> 
  </body> 
</html> -->

<!-- Il est possible de modifier le script page2.php pour qu’il détruise complètement la session. -->
<!-- uncommentaire la partie de code au dessous -->
<?php 
// Ouvrir/réactiver la session. 
session_start(); 
// Effacer toutes les informations de session. 
$_SESSION = array(); 
// Supprimer le cookie de session (si utilisé). 
// Le cookie porte le nom de la variable qui stocke  
// l’identifiant de session. 
if (isset($_COOKIE[session_name()])) { 
  setcookie(session_name(),'',time()-1,’/’); 
} 
// Détruire la session. 
session_destroy(); 
?>
<!DOCTYPE html>  
<html>  
  <head> 
    <meta charset="utf-8" />  
    <title>Page 2</title> 
    <title>Page 2</title>
  </head> 
  <body> <div> 
    <b>Page 2</b><br/>
<?php  
    echo 'Bonjour ',$_SESSION["nom"],'<br/>'; 
    echo 'session_id() = ',session_id(),'<br/>'; 
    ?>
     <a href="page3.php">Page 3</a><br /> 
    </div> 
  </body> 
</html>
