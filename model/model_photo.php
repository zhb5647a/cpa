<?php
    class Photo{
        /*-----------------------------------------
                        ATTRIBUTS
        ----------------------------------------*/
        private ?int $id_photo;
        private ?string $name_photo;
        private ?string $createdAt;
        private ?string $updateAt;
        private ?string $url_photo;
        

        /*-----------------------------------------
                        CONSTRUCTEUR
        ----------------------------------------*/
        public function __construct(?string $nom, ?string $createAt, ?string $update, ?string $url){
            $this->name_photo = $nom;
            $this->createdAt = $createAt;
            $this->updateAt = $update;
            $this->url_photo = $url;
        }
        /*-----------------------------------------
                    GETTERS AND SETTER
        ----------------------------------------*/
        public function getIdPhoto():?int{
            return $this->id_photo;
        }
        public function getNamePhoto():?string{
            return $this->name_photo;
        }
        public function getCreatedAt():?string{
            return $this->createdAt;
        }
        public function getUpdateAt():?string{
                return $this->updateAt;
        }
        public function getUrlPhoto():?string{
            return $this->url_photo;
        }
        public function setIdPhoto(?int $id):void{
            $this->id_photo = $id;
        }
        public function setNamePhoto(?string $nom):void{
            $this->name_photo = $nom;
        }
        public function setCreatedAt(?string $createAt):void{
            $this->createdAt = $createAt;
        }
        public function setUpdateAt(?string $update):void{
            $this->updateAt = $update;
        }
        public function setUrlPhoto(?string $url):void{
            $this->url_photo = $url;
        }

        //fonction qui récupére l'extension du nom du fichier
function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);
}
//function qui va ajouter un enregistrement en BDD(table image)
function addPhoto($bdd, $nom, $createAt, $url){
    try{
        $req = $bdd->prepare('INSERT INTO image(name_photo, createdAt, url_photo) 
        VALUES(:name_photo, :createdAt, :url_photo)');
        $req->execute(array(
            'name_photo' => $nom,
            'createdAt' =>$createAt,
            'updateAt' =>$update,
            'url_photo ' =>$url
            ));
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}

    }