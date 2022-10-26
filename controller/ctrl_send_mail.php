<?php
    include './id.smtp.php';
    include './model/model_utilisateur.php';
    include './manager/manager_send_mail.php';
    include './manager/manager_user.php';
    //include './utils/connectBdd.php';
    include './vue/view_send_mail.php';
    $message = "";
    if(isset($_POST['mail'])){
        $test = new ManagerMail(null, null, null, null, null);
        /* $userEmail = 'mathieu.mith@laposte.net'; */
        $userEmail = "dinazahaf@yahoo.com";
        $subject = utf8_decode("Test de sécurité");
        $emailMessage =  "Test de mail---ok----<br>
        Abdel";
        $test->sendMail($userEmail, $subject, $emailMessage);
        $message = "mail envoyé";
    }
    else{
        $message = "Cliquer pour envoyer un mail";
    }
    echo $message;
?>