<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./asset/styles/style1.css">
<script src="./asset/script/loginUp.js" defer></script>
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
		<h2>Membre Login Form</h2>
  <!-- Button to open the modal login form -->

<button onclick="show()">Login Up</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="noShow()"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="./asset/image/femmePhotographe.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login Up</button>
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