
    <?php
    session_start(); 
    //imports
    include_once './utils/connectBdd.php';
    // include_once 'ctrl_connect_user.php';
    include_once './model/model_photo.php';
    include_once './manager/manager_photo.php';
    include_once './vue/back/view_add_photo.php';
    $msg = "";
    //tests
    // recuperation id utilisateur lors de la connexion
    // $idUtil= $_SESSION['id'];

    //test si le bouton est cliqué
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
             $tmpName = $_FILES['url_photo']['tmp_name'];
             $nom = $_POST['name_photo'];
             $data->setNom($nom);
             $data->setCreatedAt($_POST['createdAt']);
             $data->setUpdateAt($_POST['updateAt']);
            // $data->setUrlPhoto($name);
             $data->setIdThem($_POST['id_thema']);
           
          
            $upload = "./asset/image/$name";
            $data->setUrlPhoto($upload);
            // if(isset($_POST['id_thema'])){
            //     foreach()
            // }
            
            //déplacer l'image dans le dossier image (rename)
            move_uploaded_file($tmpName, $upload);
            //function qui ajoute l'image en  BDD,
            $data->addPhoto($bdd);
            $msg = 'La photo'.$nom.' à été ajoutée avec success';
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