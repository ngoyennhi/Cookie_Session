<?php 
// arsort — Sort an array in descending order and maintain index association
  arsort($_SESSION['visites']);
  // => ancienne session. 
  $arrPagesVisited = $_SESSION['visites'];
  //ne stocker que le NOME de pages visites dans $articles_vus 
  $articles_vus = [];
  foreach ($arrPagesVisited  as $key => $value) {
    // $key qui contient les nomes de pages visited
    // $value qui contient 
    $articles_vus[]=$key;
  };
  //afficher 3 derniers pages
  echo '<br>';
  echo 'Trois derniers articles consultés:';
  echo '<br>';
  for ($pagesVisited = 0; $pagesVisited <= 2; $pagesVisited++) {
    echo $articles_vus[$pagesVisited];
    echo '<br>';} ;