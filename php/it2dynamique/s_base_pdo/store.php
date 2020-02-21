<?php
 include("functions.php");
 extract($_POST);
ajouter($libelle,$prix,$qtestock);
//redirection vers index.php
header("location:index.php");

?>