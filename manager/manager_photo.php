<?php

    class ManagerPhoto extends Photo{
  
   
        public function addPhoto(object $bdd):void{
            //récupération des valeurs de l'objet ManagerContact
            $nom = $this->getNamePhoto();
            $createAt = $this->getCreatedAt();
            $update = $this->getUpdateAt();
            $urlPhoto = $this->getUrlPhoto();
            $idThema = $this->getIdThema();
            // $idUtili = $this->getIdUtil();
            try {
                $req = $bdd->prepare("INSERT INTO photo
                (name_photo, createdAt, updateAt,
                url_photo, id_thema)VALUES(?, ?, ?, ?, ?)");
                $req->bindParam(1, $nom, PDO::PARAM_STR);
                $req->bindParam(2, $createAt, PDO::PARAM_STR);
                $req->bindParam(3, $update, PDO::PARAM_STR);
                $req->bindParam(4, $urlPhoto, PDO::PARAM_STR);
                $req->bindParam(5, $idThema, PDO::PARAM_INT);
                // $req->bindParam(6, $idUtili, PDO::PARAM_INT);
                $req->execute();
            } 
            catch (Exception $e) 
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }

        //fonction qui recupére tout les photos 
        public function showAllPhoto($bdd){
         
            try {
                $req = $bdd->prepare('SELECT id_photo, name_photo, createdAt, updateAt, url_photo, id_thema, id_util FROM photo');
        
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            } catch (Exception $e) {
                die('Erreur :' .$e->getMessage());
            }
        }
        
       //fonction qui recupére tout les photos 
       public function showAllPhotoV2($bdd):array{
         
        try {
            $req = $bdd->prepare('SELECT * FROM photo');
    
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Erreur :' .$e->getMessage());
        }
    }
     

         // function pour recuperer une photo par son Id
        public function getPhoto($bdd, $value){
            try{
                $req= $bdd->prepare('SELECT id_photo, name_photo, createdAt, updateAt, url_photo, id_thema, id_util FROM photo WHERE id_photo = :id_photo');
                $req->execute(array(
                    "id_photo" => $value
                ));
                return $req->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
        // function pour recuperer une photo par son Id
        public function getPhotoById($bdd, $id){
            try{
                $req= $bdd->prepare('SELECT * FROM photo WHERE id_thema = :id_thema');
                $req->execute(array(
                    "id_thema" => $id
                ));
                return $req->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

         //function pour supprimer une  les photos 
         public function deletePhoto($bdd, $value){
            try{
                $req = $bdd->prepare('DELETE FROM photo
                WHERE id_photo = :id_photo');
                $req->execute(array(
                    "id_photo" => $value,
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
            
         
    }

    