<?php
 //import
 include_once './utils/connectBdd.php';
 include_once './id_smtp.php';
 include_once './model/model_photo.php';
 include_once './manager/manager_photo.php';
 include_once './vue/front/styleDeLaVie.php';

 $message = "";

$album = new ManagerPhoto();

$allPhoto = $album->getPhotoById($bdd, 4);

echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="album">Album photo</h2></div>';
// echo '<div class="d-flex flex-row">';

foreach($allPhoto as $value){
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col">';
    echo '<div class="card shadow m-5 bg-body rounded" style="width:20%;">
    <img src='.$value->url_photo.' class="card-img-top" alt="photo">
    <div class="card-body">
        <h5 class="card-title">'.$value->name_photo.'</h5>';
    //     echo '<div>
    //     <a href="='.$value->id_photo.'"><img src="./asset/image/supprimer.png" alt="" class="me-4"></a>
    // </div>';
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    
}

?>