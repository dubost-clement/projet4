<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description"
            content="Venez découvrir mon tout dernier roman Billet simple pour l'Alaska, sous forme d'épisodes quotidiens !"/>
    <meta property="og:title" content="Forteroche Jean"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.dubostclement.fr/projet4"/>
    <meta property="og:image" content="http://www.dubostclement.fr/projet4/public/images/roman.jpg"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo $router->getBaseURL()?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo $router->getBaseURL()?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/nav.css">
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/formConnexion.css">
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/margin.css">
    <title>Connexion</title>
</head>
<body>

    <?php include('templates/nav.php'); ?>

    <form action="<?php echo $router->getBaseURL() ?>/login" method="post" class="form-signin margin">
        <h4 class="h3 mb-3 font-weight-normal text-center">Connectez vous :</h4>
        <label for="inputText">Nom:</label>
        <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="votre nom" required>
        <label for="inputPassword">Mot de passe:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="votre mot de passe" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>