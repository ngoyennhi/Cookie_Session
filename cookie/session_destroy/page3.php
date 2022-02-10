<?php 
// Ouvrir/réactiver la session. 
session_start(); 
?>
<!DOCTYPE html>  
<html>  
  <head> 
    <meta charset="utf-8" />  
    <title>Page 3</title>
  </head> 
  <body> 
    <div> 
    <b>Page 3</b><br /> 
<?php
echo 'Bonjour '.$_SESSION["nom"].'<br />'; 
echo 'session_id() = '.session_id().'<br />'; 
    ?>
    <a href="page1.php">Page 1</a><br/> 
</div>
</html>
