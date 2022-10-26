<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="./asset/styles/style_header.css">
    </head>
    <nav>
        <h1>Add photo</h1>
        <div class="onglets">
            <a href="index.html">Accueil</a>
            <a href="galerie.html">Galerie</a>
            <a href="evenement.html">Evenements</a>
            <a href="inscription.html">Inscription</a>
        </div>
    </nav>
    <title>Add photo</title>
</head>
<body>
    <div id="bottom">
        <button type="button" class="btn btn-warning">Modifier</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
    </div>

    <form action="" method="post">
    <div  class="row row-cols-4 m-4">
<div class="form-group row no-gutters col">
    <label for="name" class="col-3">name:</label>
    <input type="text" class="col form-control" id="namePhoto" name="name_photo">
</div>
<div class="form-group row no-gutters col-3">
    <label for="addAt" class="col-4">Ajouter le:</label>
    <input type="date" class="col form-control" id="dateAdd" name="createdAT">
</div>
<div class="form-group row no-gutters col">
    <label for="addAt" class="col-4">Modifier le:</label>
    <input type="date" class="col form-control" id="dateAdd" name="updateAT">
</div>
<div class="form-group row no-gutters col">
    <label for="upload" class="col-3">Importer:</label>
    <input type="file" class="col form-control pr-2" id="filePhoto" name="url_photo">
</div>
</div>
<div id="idAjouter">
<button class="btn btn-primary" type="submit" name="addPhoto">Ajouter</button>
</div>
 </form>

      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    
</body>
</html>