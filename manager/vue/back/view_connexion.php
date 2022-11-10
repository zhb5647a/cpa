<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<nav>
<h1>Connexion</h1>
        <div class="onglets">
            <a href="/cpa/">Accueil</a>
            <a href="/cpa/galerie">Galerie</a>
            <a href="evenement.html">Evenements</a>
            <a href="contact.html">Contact</a>
            <a href="/cpa/connexion">Se connecter</a>
            <a href="/cpa/createUser">Inscription</a>
        </div>
    </nav>
<body>
  <!-- mise en place du grid container -->
  <div class="container">
        <div class="row">
            <!------------- partie connexion  -------------------------->
            <!-- debut col grid -->
            <div class="col m-5 shadow p-5 mb-5 bg-body rounded  border border-1 ">
                <!-- debut col grid -->
                <form action="" method="post">
                    <h2 class="text-center mb-5">Connexion Membre</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail :</label></br>
                        <input type="email" class="form-control" id="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="pwd" name="pwd_util" required>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" name="connect" class="btn btn-secondary w-50">se connecter</button>
                    </div>
                </form>
                <!-- fin col grid -->
            </div>
            </div>
            </div>
</body>
</html>