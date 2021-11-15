<?php 

$contries=['Espagne'=>'es','Belgique'=>'be','France'=>'fr' ,'Angleterre'=>'en'] ;
foreach($contries as $contry=>$iso){
    echo '<a href ="?iso = '.$iso.'">'.$contry.'</a>' ;
}
if(isset($_GET['iso'])){
  if($_GET['iso']=='es'){
  echo '<p>'. $_Get['iso'].'hola </p>';
}
}


/*
CORRECTION
Tu as mis des espaces dans le href du <a> à la ligne 5 après le ?iso. Puis à la ligne 9, tu as mis $_Get et pas $_GET donc il n'a pas été content. Sinon le reste est correct
 

$contries=['Espagne'=>'es','Belgique'=>'be','France'=>'fr','Angleterre'=>'en'] ;
foreach($contries as $contry=>$iso){
    echo '<a href ="?iso='.$iso.'">'.$contry.'</a>' ;
}
if(isset($_GET['iso'])){
  if($_GET['iso']=='es'){
  echo '<p>'. $_GET['iso'].'hola </p>';
}
}
*/
?>