<?php 
// arsort — Sort an array in descending order and maintain index association
  arsort($_SESSION['visites']);
  // => ancienne session. 
  $arrPagesVisited = $_SESSION['visites'];
  //ne stocker que le NOME de pages visites dans $tempsArr 
  $tempsArr = [];
  foreach ($arrPagesVisited  as $key => $value) {
    // $key qui contient les nomes de pages visited
    // $value qui contient 
    $tempsArr[]=$key;
  };
  //afficher 3 derniers pages
  echo '<br>';
  echo 'Page visited:';
  echo '<br>';
  for ($pagesVisited = 0; $pagesVisited <= 2; $pagesVisited++) {
    echo $tempsArr[$pagesVisited];
    echo '<br>';} ;