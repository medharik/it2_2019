<?php

$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte=$_POST['qte'];

include ("functions.php");
// ajouter_produit("acer c7",10000);
// $resultat=tous();
// var_dump($resultat);// pour afficher le contenu de la variable

ajouter_produit( $libelle,$prix,$qte);



?>