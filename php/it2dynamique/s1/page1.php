<?php 
//tranfert dep donnees par liens (url)
//localhost:83//it2/page1.php?prenom=yacine&age=34
var_dump($_GET);
//info elementaire
$prenom=$_GET['prenom'];
$age=$_GET['age'];
$n=$_GET['nationalite'];
//info elaboree
if($age>18){
$majorite="Majeur";

}else{
    $majorite="Mineur";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les bases du php</title>
</head>
<body>
    <h2>Bienvenue <?=$prenom?></h2>
<h3>Vous etes <?=$majorite?></h3>
<h3><?=$_GET['nationalite']?></h3>
</body>
</html>