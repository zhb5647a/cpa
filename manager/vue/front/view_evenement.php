<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Evenements</title>
</head>
<header>
    <nav>
        <h1>Evenements</h1>
        <div class="onglets">
            <a href="index.html">Accueil</a>
            <a href="galerie.html">Galerie</a>
            <a href="contact.html">Contact</a>
            <a href="inscription.html">Inscription</a>
        </div>
    </nav>
</header>
<body>
echo '<div class="row">';
    // echo '<div class="col">';
    echo '<div class="card shadow m-5 bg-body rounded" style="width:20%;">
    <img src='.$value->url_photo.' class="card-img-top" alt="photo">
    <div class="card-body">
        <h5 class="card-title">'.$value->name_photo.'</h5>';
    //     echo '<div>
    //     <a href="='.$value->id_photo.'"><img src="./asset/image/supprimer.png" alt="" class="me-4"></a>
    // </div>';
        
        echo '</div>';
        echo '</div>';
        // echo '</div>';
        echo '</div>';
        // echo '</div>';
       
}
echo '</div>';
</body>
</html>