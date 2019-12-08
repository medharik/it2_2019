<?php 
//var_dump($_GET);
// $_GET : VARIABLE IMPLICITE ET ASSOCIATIF contenant 
// toutes les informations se trouvant dans le lien
    $prix= $_GET['prix'];
    $qte= $_GET['qte'];
    //empty : null , "" , 0 , false , array() ou []
if(empty($prix) || empty($qte)){
    //redirection vers form.php
header("location:form.php?n=debbab");
}else if(! is_numeric($prix) || ! is_numeric($qte)){
    header("location:form.php?n=nn");
}



    $ttc=$prix *$qte;

$src="images/exp.png";
    if($ttc<1000){
$src="images/cheap.png";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="card mt-2" style="width: 18rem;">
  <img src="<?=$src?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Prix : <?php echo $prix;?> DHS </h5>
    <p class="card-text">Quantite :  <?=$qte?></p>
    <a href="#" class="btn btn-primary">TTC : <?=$ttc?> DHS</a>
  </div>
</div>
    </div>


    
</body>
</html>