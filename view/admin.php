<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo $router->getBaseURL()?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo $router->getBaseURL()?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/nav.css">
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/margin.css">
    <title>Administration</title>
</head>
<body>
    <?php include('templates/nav.php'); ?>
    <h3 class="text-center margin-admin">Administration</h3>

    <div class="actionAdmin m-2 p-2 m-md-5 p-md-4 border border-dark rounded">
        <a href="<?php echo $router->getBaseURL() ?>/posts/new">créer un nouveau chapitre</a>
        <a href="<?php echo $router->getBaseURL() ?>/posts" class="d-block">modifier/supprimer un chapitre</a>
        <a href="<?php echo $router->getBaseURL() ?>/comments/reported">gestion des commentaires</a>
    </div>

    <div class="m-5">
        <form action="<?php echo $router->getBaseURL() ?>/disconnect" method="post" class="d-flex justify-content-center">
            <input class="btn btn-primary" type="submit" value="déconnexion"/>
        </form>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>