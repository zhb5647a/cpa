<?php
    include './utils/function.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    switch($path){
        // case '/cpa/createArticle':
        //     include './controller/ctrl_create_.php';
        //     break;
        // case '/cpa/allArticle':
        //     include './controller/ctrl_show_all_article.php';
        //     break;
        // case '/cpa/activate':
        //     include './controller/ctrl_activate_account.php';
        //     break;
        case '/cpa/createUser':
            include './controller/ctrl_create_user.php';
            break;
            case '/cpa/connectUser':
                include './controller/ctrl_connect_user.php';
                break;
        // case '/cpa/sendMail':
        // include './controller/ctrl_send_mail.php';
        // break;
        // case '/cpa/testMail':
        //     include './controller/ctrl_test_mail.php';
        //     break;
        default :
            include './controller/ctrl_home.php';
            // include './vue/view_add_photo.php';
            break;
            // include './vue/view_connect_user.php';
            // break;
    }
?>