<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Connexion</title>
</head>

<body>
  <!-- mise en place du grid container -->
  <div class="container">
        <div class="row justify-content-md-center">
            <!------------- partie connexion  -------------------------->
            <!-- debut col grid -->
            <div class="col col-md-5 m-5 shadow p-5 mb-5 bg-body rounded  border border-1">
                <!-- debut col grid -->
                <form action="" method="post">
                    <h2 class="text-center mb-5">Se connecter</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail :</label></br>
                        <input type="email" class="form-control w-75 h-25" id="email" name="mail_util" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control w-75 h-25" id="pwd" name="pwd_util" required>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" name="connect" class="btn btn-info w-50">Connexion</button>
                    </div>
                </form>
                <!-- fin col grid -->
            </div>
            </div>
            </div>
</body>
</html>