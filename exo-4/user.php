<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-4 partie-VIII user</title>
    </head>
    <body class="container-fluid bg-danger">
        <div class="col-md-12 text-center firstCont">
            <h1>Exercice 4:</h1>
            <p class="firstParagraph">L'instruction:</p>
            <p class="firstParagraph">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        </div>
        <div class="col-md-12 border border-info-1px-solid">
                        <p><?= 'La valeur de cookie adresse e-mail est: ' . $_COOKIE['mailAdress'] ?></p> 
                         <p><?= 'La valeur de cookie mot de passe est: ' . $_COOKIE['password'] ?></p> 
        </div>
        <div class="col-md-12 text-center mt-5">
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                    sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><a href="../index.php">Page d'accueil</a></button>
            <p></p>
        </div>
    </body>
</html>