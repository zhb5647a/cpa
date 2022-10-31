<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" 
integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    </head>

<body>
<div class="nav navbar-dark bg-primary">
     <div class="container-fluid">
         <h2 class="text-center">Ajouter Image Dans la Base de Donnée
         Bootstrap & PHP/MySQL</h2>
        </div>
</div>
<br>
     <div class="container col-md-5 col-md">
        <div class="panel border border-3">
            <div class= "panel-heading bg-info" >Formulaire Ajout une Image</div>
                <p><div class= "panel-body m-2">
                    <form method= "post" action="" enctype="multipart/form-data">
                        <div class= "form-group row">
                            <label class="col-sm-3 col-form-label">Nom</label>
                            <div class="col-sm-8">
                                <input type="text" name= "name_photo" class="form-control">
                            </div>
                        </div></p>
                    <div class= "form-group row">
                            <label class="col-sm-3 col-form-label align-items-center">Ajouter le:</label>
                            <div class="col-sm-8">
                                <input type="date" name= "createdAt" class="form-control">
                            </div>
                    </div>
                    <p><div class= "form-group row">
                            <label class="col-sm-3 col-form-label align-items-center">Modifier le:</label>
                            <div class="col-sm-8">
                                <input type="date" name= "updateAt" class="form-control">
                            </div>
                    </div></p>
                  
                  <p><div class="col row align-items-center">
                  <p class="col-3">Thématique:</p>
                        <select name="id_thema" class="col-auto">
                            <option value="1">Sport</option>
                            <option value="2">Nature</option>
                            <option value="3">Ville</option>
                            <option value="4">Musique</option>
                        </select>
                  </div></p>
                  
                  <div class= "form-group row">
                            <label class="col-sm-2 col-form-label">Photo:</label>
                            <div class="col-sm-8">
                                <input type="file" name= "url_photo" class="form-control-file">
                            </div>
                    </div>
                    <p>
                        <div class= "form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-8">
                            <button class="btn btn-primary" type="submit" name="addPhoto">Enregistrer</button>
                        </div>
                    </p>
                        
            

                    
                    </form>
                </div>
            </div>
        </div>
    
                     


      
    
</body>
</html>