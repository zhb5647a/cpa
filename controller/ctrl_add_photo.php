
    <?php
    // session_start(); 
    //imports
    include_once './utils/connectBdd.php';
    include_once './utils/fileExt.php';
    include_once './utils/header_admin.php';
    include_once './model/model_photo.php';
    include_once './manager/manager_photo.php';
    include_once './vue/back/view_add_photo.php';


    $msg = "";
 
    if(isset($_POST['addPhoto'])){
        //test si les champs sont remplis
        if(!empty($_POST['name_photo']) AND !empty($_POST['createdAt']) AND !empty($_POST['updateAt'])
         AND (isset($_FILES['url_photo']) AND $_FILES['url_photo']['name'] != '')){
            
            //nettoyer les inputs et set des données
            // $pho->setNom(cleanInput($_POST['name_photo']));
            // $pho->setCreate(cleanInput($_POST['createdAt']));
            // $pho->setUpdate(cleanInput($_POST['updateAt']));
            // $pho->setUrl(cleanInput($_FILES['url_photo']));
            //instancier un objet 
            $data = new ManagerPhoto();
             //créer des variables qui vont contenir le contenu des super globales FILES
             $name=$_FILES['url_photo']['name'];
             $ext = get_file_extension($name);
             $allow_ext = array("png","jpg","gif","webp");
            //  var_dump($ext);
             $tmpName = $_FILES['url_photo']['tmp_name'];
             $nom = $_POST['name_photo'];
             $data->setNom($nom);
             $data->setCreatedAt($_POST['createdAt']);
             $data->setUpdateAt($_POST['updateAt']);
            // $data->setUrlPhoto($name);
             $data->setIdThem($_POST['id_thema']);
            
            if(in_array($ext,$allow_ext)){
            $upload = "./asset/image/$name";
            // $upload = "ftp://test@localhost/image/$name";
       
            
            $data->setUrlPhoto($upload);
            // if(isset($_POST['id_thema'])){
            //     foreach()
            // }
            
            //déplacer l'image dans le dossier image (rename)
            move_uploaded_file($tmpName, $upload);
            //function qui ajoute l'image en  BDD,
            $data->addPhoto($bdd);
            $msg = ''.$nom.' à été ajoutée avec success';
        }
        else{
            $msg = "votre fichier n'est pas une image";
        }
        }
        else{
            $msg = "Veuillez remplir tous les champs";
        }
           
    }
    else{
        $msg = "Pour ajouter une photo veuillez remplir le formulaire";
    }
    echo $msg;

 
   
?>