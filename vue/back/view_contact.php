<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>CLub Photographe</title>
</head>

<body>

    <section class="pageContent">
   
    <p>Si vous souhaiter vous adhérer merci de remplir ce formulaire</p>
    
    <form  action="#" method="post">
        <div class="formContent" >
                        <div>
                            <p><label for="fName"></label></p>
                            <input id="fName" type="text" placeholder="Nom*" required title="Votre prénom est une information req" >
                        </div>
                            <div>
                                <p><label for="lName"></label></p>
                                <input id="lName" type="text" placeholder="Prenom*" required title="Votre nom de famille est une information req" >
                            </div>
                            <div>
                                <p><label for="email"></label></p>
                                <input id="email" type="email" placeholder="Email*" required title="Votre emailest une information req" >
                            </div>
        </div>
                    <div id="formMessage">
                        <p><label for="message"></label></p>
                        <textarea name="formMessage" placeholder="Votre message"  id="textContent" cols="90" rows="10"></textarea>
                        <div><button class="btn btn-info mt-4" type="submit">Envoyer</button></div>
                    </div>

                    

    </form>
</section>
    
  
    
    
</body>

</html>
