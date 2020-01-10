<?PHP
session_start();
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
        <div class="col-md-12 text-center border border-info-1px-solid">
            <p>Regarde: </p>
            <p>Tu t'appelle <?php echo $_SESSION['lastname']. ' ' . $_SESSION['firstname']; ?>, non?</p>
            <p>Et tu a <?php echo $_SESSION['age']; ?></p>
            <p class="btn btn-info "><a href="index.php">La page précédente</a></p>
        </div>
    </body>
</html>

