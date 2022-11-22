<?php
 //import
 include_once './utils/connectBdd.php';
 include_once './id_smtp.php';
 include_once './model/model_photo.php';
 include_once './manager/manager_photo.php';
 include_once './vue/front/view_gerer_photo.php';


 $album = new ManagerPhoto();

 $allPhoto = $album->showAllPhoto($bdd);


echo '<div class="card shadow m-5 p-2 bg-body rounded">
<h2 class="text-center" id="album">Album photo</h2>';
echo '<form action="" method="post">';

echo'<div class="d-flex justify-content-around mt-4">
<input type="submit" class="btn btn-outline-danger" name="del" value="Supprimer">
<input type="submit" class="btn btn-outline-warning" value="Modifier">
<a class="btn btn-outline-success" href="addPhoto" role="button">Ajouter</a>
<a class="btn btn-outline-primary" href="showPhoto" role="button">Afficher</a>';
echo'</div>';
echo'</div>';

echo '<div class="container">';
echo'<div class="row">';

foreach($allPhoto as $value){

    echo '<div class="col">';
   
    echo'<div class="" style="width:18rem; height:18rem;">
    <input class="form-check-input" type="checkbox" id="" name="'.$value->name_photo.'" value="'.$value->id_photo.'">
    <img src='.$value->url_photo.' class="card-img-top" alt="photo">';
  
   
        
       
        echo'</div>';
        echo'</div>';
        
}
echo '</div>';
echo '</div>';

echo ' </form>';
if (isset($_POST['del'])) {
  
    
    // if (!empty($_POST[''])) {
        // var_dump($_POST);
        foreach($_POST as $value){
         $album->getPhoto($bdd, $value);
   
            //méthode pour supprimer une photo depuis son id
            $album->deletePhoto($bdd, $value);
            
    }
    echo '<p>Suppression de toutes les photos séléctionné'.'</p>';
    header('Location: showPhoto');
}
else{
    echo"<p>Veuillez cocher un ou plusieurs photo à supprimer</p>";
}


?>