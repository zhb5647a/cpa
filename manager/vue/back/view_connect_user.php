<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./asset/styles/style1.css">

    </head>
    <nav>
        <h1>Connexion</h1>
        <div class="onglets">
            <a href="index.html">Accueil</a>
            <a href="galerie.html">Galerie</a>
            <a href="evenement.html">Evenements</a>
            <a href="inscription.html">Inscription</a>
        </div>
    </nav>
    <body>

  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <img src="./asset/image/femmePhotographe.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <div class="">
      <label for="uname"><b>Username</b></label>
      <input type="email" placeholder="Enter Username" name="mail_util" required>
      </div>
      <div class="">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd_util" required>
      </div>
      <button type="submit" neme="connect">Login Up</button>
      <label>
        <input type="checkbox" checked="" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="noShow()" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div> 
    </body>
</html>