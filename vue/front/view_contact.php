<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>CLub Photographe</title>
</head>

<body id="contact">
    <header>
    <nav>
        <h1>Contact</h1>
        <div class="onglets">
            <a href="index.html">Accueil</a>
            <a href="galerie.html">Galerie</a>
            <a href="evenement.html">Evenements</a>
            <a href="inscription.html">Inscription</a>
        </div>
    </nav>
</header>
    <section id="pageContent">
    <div id="p">
    <p>Si vous souhaiter nous Contacter merci de remplir ce formulaire</p>
    </div> 
    <form id="formContact" action="#">
        <div id="formContent">
            <div>
                <p><label for="fName">Prénom* :</label></p>
                <input id="fName" type="text" required title="Votre prénom est une information req" >
            </div>
            <div>
                <p><label for="lName">Nom de famille* :</label></p>
                <input id="lName" type="text" required title="Votre nom de famille est une information req" >
            </div>
            <div>
                <p><label for="email">Email* :</label></p>
                <input id="email" type="email" required title="Votre emailest une information req" >
            </div>
        </div>
                    <div id="formMessage">
                        <p><label for="message">Votre message* :</label></p>
                        <textarea name="formMessage" id="textContent" cols="90" rows="10"></textarea>
                        <div id="btn"><button type="submit">Envoyer</button></div>
                    </div>

                    

    </form>
</section>
    
  
    
    
</body>

</html>
