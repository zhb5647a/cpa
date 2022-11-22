<?php
 //import
 include_once './utils/connectBdd.php';
 include_once './id_smtp.php';
 include_once './model/model_photo.php';
 include_once './manager/manager_photo.php';
 include_once './vue/front/view_show_photo.php';

 $message = "";

$album = new ManagerPhoto();

$allPhoto = $album->showAllPhoto($bdd);

echo '<div class="card shadow m-5 p-2 bg-body rounded">
<h2 class="text-center" id="album">All photo</h2>';


echo'<div class="d-flex justify-content-around mt-4">
<a class="btn btn-outline-secondary" href="admin" role="button">Supprimer</a>
<a class="btn btn-outline-secondary" href="" role="button">Modifier</a>
<a class="btn btn-outline-secondary" href="addPhoto" role="button">Ajouter</a>
<a class="btn btn-outline-secondary" href="showPhoto" role="button">Afficher</a>';
echo'</div>';
echo'</div>';


echo '<div class="container">';
echo'<div class="row">';
foreach($allPhoto as $value){
  
    echo '<div class="col">';
   
    echo'<div class="" style="width:18rem; height:18rem;">
   
    <img src='.$value->url_photo.' class="card-img-top" alt="photo">';
  
   
        
       
        echo'</div>';
        echo'</div>';
        
        
      


}
echo '</div>';
echo '</div>';

?>