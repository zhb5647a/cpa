<?php
    include './utils/function.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    switch($path){
        case '/cpa/addPhoto':
            include './controller/ctrl_add_photo.php';
            break;
        case '/cpa/connexion':
            include './controller/ctrl_connect_user.php';
            break;
        // case '/cpa/activate':
        //     include './controller/ctrl_activate_account.php';
        //     break;
        case '/cpa/createUser':
            include './controller/ctrl_create_user.php';
            break;
            case '/cpa/contact':
                include './controller/ctrl_contact.php';
                break;
        case '/cpa/showByThem':
        include './controller/ctrl_show_by_them.php';
        break;
        case '/cpa/admin':
            include './controller/ctrl_gerer_photo.php';
            break;
        
        case '/cpa/showPhoto':
            include './controller/ctrl_show_photo.php';
            break;
            case '/cpa/nature':
                include './controller/ctrl_natureGallery.php';
                break;
                case '/cpa/ville':
                    include './controller/ctrl_villeGallery.php';
                    break;
                    case '/cpa/musique':
                        include './controller/ctrl_musiqueGallery.php';
                        break;
                        case '/cpa/sport':
                            include './controller/ctrl_sportGallery.php';
                            break;
        
        case '/cpa/galerie':
            include './controller/ctrl_galeriess.php';
            break;
            case '/cpa/Accueil':
                include './controller/ctrl_home.php';
                break;
         
        default :
            include './controller/ctrl_home.php';
            break;
            // include './vue/view_add_photo.php';
            // break;
            // include './vue/view_connect_user.php';
            // break;
            // include './vue/view_connect_user.php';
            // break;
    }
?>