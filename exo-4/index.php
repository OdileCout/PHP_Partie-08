<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['mailAdress']) && isset($_POST['password'])) {
        $time = 365 * 24 * 3600;
        setcookie('mailAdress', $_POST['mailAdress'], time() + $time);
        setcookie('password', $_POST['password'], time() + $time);
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-4 partie-VIII</title>
    </head>
    <body class="container-fluid bg-danger">
        <div class="col-md-12 text-center firstCont">
            <h1>Exercice 4:</h1>
            <p class="firstParagraph">L'enoncé:</p>
            <p class="firstParagraph">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        </div>
        <div class="col-md-12 border border-info-1px-solid">
            <form method="POST" action="#">
                <fieldset>
                    <legend class="text-center">Connexion</legend>
                    <div class="form-group">
                        <label for="mailAdress">Adresse e-mail</label>
                        <input type="email" class="form-control" id="mailAdress" name="mailAdress" placeholder="Entrez votre adresse e-mail" />
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" />
                    </div>
                    <input type="submit" class="btn btn-primary" value="Envoyer" name="submit" />
                </fieldset>
            </form>
        </div>
        <div class="col-md-12 text-center mt-5">
            <p><a href="user.php">Afficher les données de cookie</a></p>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><a href="../index.php">Page d'accueil</a></button>
        </div>
    </body>
</html>