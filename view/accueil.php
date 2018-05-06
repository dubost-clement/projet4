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
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/margin.css">
    <link rel="stylesheet" href="<?php echo $router->getBaseURL()?>/public/contact.css">
    <title>Accueil</title>
</head>
<body>

    <?php include('templates/nav.php'); ?>
    <?php include('templates/header.php'); ?>

    <h1 class="text-center mt-3 mt-md-5">Billet simple pour l'Alaska</h1>

    <div class="d-lg-flex mt-3 mt-md-5">
        <div class="présentation p-3 p-md-4">
            <h2 class="text-center mb-4">À propos de moi</h2>
            <p>bienvenue à vous je suis Forteroche Jean écrivain depuis plus de 20 ans. A l'occasion de la sortie de mon nouveau
            roman Billet simple pour l'Alaska,
            je vous propose de le découvrir sur mon site internet sous la forme d'épisodes qui sortiront successivement les
            uns après les autres.
            </p>
            <p>
            Vous pourrez bien évidemment trouver mon nouveau roman en librairie mais aussi en version ebook.
            Je vous souhaites une bonne visite ainsi qu'une bonne lecture !
            </p>
        </div>
        <div class="liste-article p-3 p-md-4 w-100">
            <h2 class="text-center mb-4">Épisodes publiés</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">titre</th>
                        <th scope="col">date de publication</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($posts as $post) {
                    ?>
                    <tr class="text-center">
                        <td><a
                            href="<?php echo $router->getBaseURL() ?>/posts/<?php echo htmlspecialchars($post->getId()); ?>"><?php echo htmlspecialchars($post->getTitle()); ?></a>
                        </td>
                        <td><?php echo htmlspecialchars($post->getDateCreated()); ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

            <div class="contact mt-5">
            <h2 class="text-center mb-4">Contact</h2>
            <div class="bordure mb-4 p-4 d-sm-flex justify-content-around custom">
                <a href=""><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>Facebook</a>
                <a href=""><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>Twitter</a>
                <a href=""><i class="fa fa-envelope-square fa-2x" aria-hidden="true"></i>Email</a>
            </div>
            </div>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>