<?php

    class ManagerPhoto extends Photo{
  
        //fonction qui récupére l'extension du nom du fichier
function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);
}
public function addPhoto(object $bdd):void{
    //récupération des valeurs de l'objet ManagerContact
    $nom = $this->getNamePhoto();
    $createAt = $this->getCreatedAt();
    $update = $this->getUpdateAt();
    $urlPhoto = $this->getUrlPhoto();
    $idThema = $this->getIdThema();
    try {
        $req = $bdd->prepare("INSERT INTO photo
        (name_photo, createdAt, updateAt,
        url_photo, id_thema)VALUES(?, ?, ?, ?, ?)");
        $req->bindParam(1, $nom, PDO::PARAM_STR);
        $req->bindParam(2, $createAt, PDO::PARAM_STR);
        $req->bindParam(3, $update, PDO::PARAM_STR);
        $req->bindParam(4, $urlPhoto, PDO::PARAM_STR);
        $req->bindParam(5, $idThema, PDO::PARAM_INT);
        $req->execute();
    } 
    catch (Exception $e) 
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
    }