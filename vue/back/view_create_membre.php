<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/styles/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>
<nav>
<h1>Inscription</h1>
        <div class="onglets">
            <a href="/cpa/">Accueil</a>
            <a href="/cpa/galerie">Galerie</a>
            <a href="evenement.html">Evenements</a>
            <a href="/cpa/contact">Contact</a>
            <a href="/cpa/connexion">Se connecter</a>
            <a id ="signin" href="/cpa/createUser">Inscription</a>
        </div>
    </nav>
<div class="container">
        <div class="row justify-content-md-center">
            <!------------- partie connexion  -------------------------->
            <!-- debut col grid -->
            <div class="col col-md-5 m-5 shadow p-5 mt-1 bg-body rounded  border border-1 ">
                <!-- debut col grid -->
                <form action="" method="post">
                    <h2 class="text-center mb-1">Enregistrer un Member</h2>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Nom :</label>
                        <input type="text" class="form-control w-75 h-50" id="pwd" name="name_util" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">prenom :</label>
                        <input type="text" class="form-control w-75 h-50" id="pwd" name="first_name_util" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail :</label></br>
                        <input type="email" class="form-control w-75 h-50" id="email" name="mail_util" 
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control w-75 h-50" id="pwd" name="pwd_util"
                         pattern="(?=.*\d)(?=.*[a-z0-9])(?=.*[A-Z]).{6,}" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Confirmer votre mot de passe :</label>
                        <input type="password" class="form-control w-75 h-50" id="pwd" name="confirm_pwd" 
                        pattern="(?=.*\d)(?=.*[a-z0-9])(?=.*[A-Z]).{6,}" required>
                    </div>
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="id_role">
                            <label class="form-check-label" for="flexCheckDefault">
                                Cocher si Admin
                            </label>
                            </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" name="createUser" class="btn btn-info w-50">Ajouter</button>
                    </div>
                </form>
                <!-- fin col grid -->
            </div>
            </div>
            </div>
</body>
</html>