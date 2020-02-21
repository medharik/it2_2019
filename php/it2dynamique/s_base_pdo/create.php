<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-2">
            <form action="store.php" method="post">
<div class="form-group">
                    
<label for="libelle">
Libelle : 
            </label>
        <input type="text" class="form-control" name="libelle" id="libelle">
        
</div>
<div class="form-group">
                    
<label for="prix">
Prix : </label>
            <input type="text" class="form-control" name="prix" id="prix">
    </div>
<div class="form-group">
                    
<label for="qtestock">
Quantite en stock : 
            </label>
            <input type="text" class="form-control" name="qtestock" id="qtestock">      
</div>
<button type="submit" class="btn btn-primary btn-block col-md-6 mx-auto">Ajouter</button>
</div>
</form>
</div>
</div>
    
</body>
</html>