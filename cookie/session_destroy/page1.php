<?php 
// Ouvrir/réactiver la session. 
session_start(); 
// Enregistrer une information dans la session. 
$_SESSION["nom"] = 'Olivier'; 
?> 
<!DOCTYPE html>  
    <html>  
        <head> 
             
             <meta charset="utf-8"/> 
             <title>Page 1</title>
       </head> 
       <body> 
           <div> 
               <b>Page 1</b><br/> 
<?php  
echo 'Bonjour '.$_SESSION["nom"].'<br/>'; 
echo 'session_id() = '.session_id().'<br/>'; 
?>
<a href="page2.php">Page 2</a><br/> 
        </div> 
    </body> 
</html>