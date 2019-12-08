<?php 
$nom=$_GET['nom'];
$email=$_GET['email'];
$message=$_GET['message'];
mail("med.harik@gmail.com","Message  de $nom  email $email"
,$message);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Message envoye
</body>
</html>