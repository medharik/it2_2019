<?php 
// connexion db
 function connecter_db(){
    $link = new PDO('mysql:host=localhost;dbname=d2j',
     'root', '');
     return $link;

 }


//ajouter produit  ds la bd
function ajouter($libelle, $prix,$qtestock=0){
$link=connecter_db();
$req=$link->prepare("insert into produit(libelle,prix,qtestock) values (?,?,?)");
$req->execute([$libelle, $prix,$qtestock]);
}
//liste produit  depuis la bd

?>





