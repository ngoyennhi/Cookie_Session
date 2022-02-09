<!-- Json_decode() transforme un string en objet. -->
<?php 
if (isset($_COOKIE['objet'])) { 
    $json = $_COOKIE['objet'];
    var_dump($json);
    echo "<br>";
    $myObj = json_decode($json);
    var_dump($myObj);
    echo "<br>";
 }else{
     echo 'Le cookie "objet" n\'existe pas';
 }
 ?>
 <a href="json_encode.php">Retour</a>
 