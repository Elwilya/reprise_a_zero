<?php
session_start();

require_once 'includes/Fonctions.php';
require_once 'includes/Variables.php';

//if (isset($_POST['username'])) {
//    $_SESSION['username'] = $_POST['username'];
//}

//if (!empty($_POST['username']) && !empty($_POST['password']) && //!$loginError) {
//    $_SESSION['username'] = $_POST['username'];
//    header('Location: index.php');
//    $loginError = false;
//}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Les beaux bonnets</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list.php">Liste</a>
            </li>
            <?php if (isset($_SESSION['username'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><?= $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Déconnexion</a>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Connexion</a>
            </li>
                <?php } ?>
            
        </ul>
    </div>
</nav>

    <?php
    $login = null;
    // On garde en mémoire si une erreur se trouve dans le formulaire
    $loginError = false;
    // On va mettre les différents messages dans un tableau (il peut y en avoir un pour le login, un pour le mot de passe)
    $loginMessages = [];

if (isset($_POST['username']) && empty($_POST['username'])) {
    echo '<div class="alert alert-danger col-md-6 mx-auto my-5" role="alert">
                nom d\'utilisateur incorrect
                </div>';
}
    if (!empty($_POST['username']) && !empty($_POST['password']) && $_POST['password'] == $password) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: index.php');
    } elseif (!empty($_POST['username']) && isset($_POST['password'])) {
        echo '<div class="alert alert-danger col-md-6 mx-auto my-5" role="alert">
                Mot de passe incorrect
                </div>';
    }
