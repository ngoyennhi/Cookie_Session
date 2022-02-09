<!DOCTYPE html>  
<html>  
  <head><meta charset="utf-8" /><title>Page 2</title></head>  
  <body> 
    <div> 
    <?php 
    if ( isset($_COOKIE["prenom"]) ) { 
      echo '$_COOKIE["prenom"] = '.$_COOKIE["prenom"].'<br/>'; 
    } else { 
      echo '$_COOKIE["prenom"] = vide <br/>'; 
    } 
    if ( isset($_COOKIE["nom"]) ) { 
      echo '$_COOKIE["nom"] = '.$_COOKIE["nom"].'<br/>'; 
    } else { 
      echo '$_COOKIE["nom"] = vide <br/>'; 
    } 
    ?> 
    </div> 
  </body> 
</html>