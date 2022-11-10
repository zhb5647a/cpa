<?php
    //import
    include './utils/connectBdd.php';
    include './model/model_user.php';
    include './manager/manager_user.php';
    include './vue/back/view_connexion.php';
    // include './vue/back/view_connect_user.php';



    $message= "";

//test si on à cliqué sur le bouton connexion
if(isset($_POST['connect'])){
    //test si les champs sont remplis
    if($_POST['mail_util'] !="" AND $_POST['pwd_util'] !=""){
        $mail = cleanInput($_POST['mail_util']);
        $pwd = cleanInput($_POST['pwd_util']);
        //instance d'un nouvel objet
        $util = new ManagerUtil(null, null, $mail, null, null, null, null);
        $verif = $util->getUtilByMail($bdd);
        $valide_util = $verif[0] ["valide_util"];
            if($valide_util == 1){
            //test si test est différent de vide
            if(!empty($verif)){
                //récupére le hash
                $hash = $verif[0]['pwd_util'];
                 //vérifie si le mot de passe correspond
                 $password = password_verify($pwd, $hash);
                 if($password){
                     //créer les super globales SESSION
                     $_SESSION['connected'] = true;
                     $_SESSION['id'] = $verif[0]['id_util'];
                     $_SESSION['name'] = $verif[0]['name_util'];
                     $_SESSION['first'] = $verif[0]['first_name_util'];
                     $_SESSION['mail'] = $verif[0]['mail_util'];
                     $_SESSION['role'] = $verif[0]['id_role'];
                     $_SESSION['valid'] = $verif[0]['valide_util'];
                     $_SESSION['token'] = $verif[0]['token_util'];
                    //  if($verif[0]['id_role'] == 2){
                    //     $_SESSION['admin'] = true;
                    // }
                    // if($verif[0]['id_role'] == 1){
                    //     $_SESSION['Membre'] = true;
                    // }
                     
                     //message connecté
                     $message ="Connecté";
                     echo '<script>
         setTimeout(()=>{
         document.location.href="/cpa/addPhoto"; 
         }, 1500);</script>';
                    //  header('location:/cpa/addPhoto');
                  
                 }
                }
                 else{
                    //message les informations sont incorrectes
                    $message =" les informations sont incorrectes";
                }   

            }else {
                $message = "compte non activé";
            }
    }
    //test si les champs sont vides
    else{
        $message = "Veuillez compléter les champs du formulaire";
    }
}
echo $message;

?>
    