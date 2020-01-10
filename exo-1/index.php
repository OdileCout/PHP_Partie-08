<?PHP
session_start();
$_SESSION['user'] = 'Odiletot';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-1 partie-VIII</title>
    </head>
    <body class="container-fluid">
        <div class="col-md-12 text-center page">
            <p>L'instruction:</p>
            <p>
            <ul>
                <li>Faire une page HTML permettant de donner à l'utilisateur :</li>
                <Li>son User Agent</Li>
                <li>son adresse ip</li>
                <li>le nom du serveur</li>     
            </ul>
        </p>
    </div>
    <div class="list-group">
        <p class="list-group-item active">Réponse: </p>
        <p class="list-group-item active"><?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p class="list-group-item"><?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <p class="list-group-item">Nom du serveur: <?php echo $_SERVER['SERVER_NAME']; ?></p>
    </div>
    <div class="col-md-12 text-center mt-5">
        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title=""><a href="../index.php">Page d'accueil</a></button>
    </div>
</body>
</html>
