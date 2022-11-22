<?php
 //import
 include_once './utils/connectBdd.php';
 include_once './id_smtp.php';
 include_once './model/model_photo.php';
 include_once './manager/manager_photo.php';
 include_once './vue/front/view_villeGallery.php';

 $message = "";

$album = new ManagerPhoto();

$allPhoto = $album->getPhotoById($bdd, 3);

echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="album">Album photo</h2></div>';
// echo '<div class="d-flex flex-row">';

echo '<div class="container">';
echo'<div class="row">';
foreach($allPhoto as $value){
  
    echo '<div class="col">';
   
    echo'<div class="" style="width:18rem; height:18rem;">
    <img src='.$value->url_photo.' class="card-img-top" alt="">';

   
        
       
        echo'</div>';
        echo'</div>';
        
        
      


}
echo '</div>';
echo '</div>';

?>