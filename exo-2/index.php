<?PHP
session_start();
$_SESSION['lastname'] = 'Odiletot';
$_SESSION['firstname'] = 'Bouta';
$_SESSION['age'] = '50ans';
session_write_close();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <title>Exo-2 partie-VIII</title>
    </head>
    <body class="container-fluid">
        <div class="col-md-12 text-center firstCont">
            <h1>Exercice 2: <span class="propritySpan">(Sessions)</span></h1>
            <p class="firstParagraph">Les instructions</p>
            <p>
            <ul>
                <li>Définir 3 variables</li>
                <Li>faire un liens vers une autre page.</Li>
                <li>Il faudra afficher le contenu de ces variables sur la deuxième page.</li>    
            </ul>
        </p>
    </div>
    <div class="col-md-12 text-center border border-info-1px-solid">
        <p>Solution: </p>
        <p>Tu t'apelle vraiment <?php echo $_SESSION['lastname']; ?>?</p>
        <p>Clique <a href="user.php">ici</a> si tu veux que je te rappel ton nom, prénom et ton age.</p>
    </div>
        <div class="col-md-12 text-center mt-5">
            <p><a href="../index.php" class="btn btn-info">Page d'accueil</a></p>
        </div>
</body>
</html>