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
         /*Foreign key */
        private ?string $id_thema;
        private ?string $id_util;
        

        /*-----------------------------------------
                        CONSTRUCTEUR
        ----------------------------------------*/
        public function __construct(){
            // $this->name_photo = $name;
            // $this->createdAt = $create;
            // $this->updatedAt = $update;
            // $this->url_photo = $file;
            // $this->id_thema = $id;
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
        public function getIdThema():?int{
            return $this->id_thema;
        }
        // public function getIdUtil():?int{
        //     return $this->id_util;
        // }
        public function setIdPhoto(?int $id):void{
            $this->id_photo = $id;
        }
        public function setNom(?string $nom):void{
            $this->name_photo = $nom;
        }
        public function setCreatedAt(?string $created):void{
            $this->createdAt = $created;
        }
        public function setUpdateAt(?string $update):void{
            $this->updateAt = $update;
        }
        public function setUrlPhoto(?string $url):void{
            $this->url_photo = $url;
        }
        public function setIdThem(?int $id):void{
            $this->id_thema = $id;
        }

    }