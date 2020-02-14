<?php 

function connecter_db() {
  //pDO : php data object  => extension permattant au php de communiquer avec  un SGBD  
  $options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  $pdo=new PDO("mysql:host=localhost;dbname=dbrevision2021;charset=UTF8","root","",$options);
 return $pdo;

}
function ajouter_produit($libelle,$prix,$qte=0){
$pdo=connecter_db();
$requete = $pdo->prepare("insert into produit(libelle,prix,qtestock) values(?,?,?)");
$requete->execute([$libelle,$prix,$qte]);
}
function tous(){
$pdo=connecter_db();
$requete = $pdo->prepare("select * from produit");
$requete->execute();
return $requete->fetchAll();


}




?>