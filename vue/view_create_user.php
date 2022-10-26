<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/styles/style.css">
    <title>Inscription</title>
</head>
<header>
    <nav>
        <h1>Inscription</h1>
        <div class="onglets">
            <a href="index.html">Accueil</a>
            <a href="galerie.html">Galerie</a>
            <a href="evenement.html">Evenements</a>
            <a href="contact.html">Inscription</a>
        </div>
    </nav>
</header>
<body>
    <h3>Ajouter un compte Membre :</h3>
    <form action="" method="post">
        <p>Saisir un nom :</p>
        <p><input type="text" name="name_util"></p>
        <p>Saisir un prénom :</p>
        <p><input type="text" name="first_name_util"></p>
        <p>Saisir un email :</p>
        <p><input type="mail" name="mail_util"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></p>
        <p>Saisir un mot de passe :</p>
        <p><input type="password" name="pwd_util" 
        pattern="(?=.*\d)(?=.*[a-z0-9])(?=.*[A-Z]).{6,}"></p>
        <p>Confirmer un mot de passe :</p>
        <p><input type="password" name="confirm_pwd" 
        pattern="(?=.*\d)(?=.*[a-z0-9])(?=.*[A-Z]).{6,}"></p>
        <p>Cocher si Admin</p>
        <input type="checkbox" name="id_role">
        <p><input type="submit" value="Ajouter" name="createUser"></p>
    </form>
</body>
</html>