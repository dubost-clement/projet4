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
    <script src="<?php echo $router->getBaseURL()?>/scripts/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
        selector: "#contentPost",
        language: "fr_FR",
        });
    </script>
    <title>Ajouter un chapitre</title>
</head>
<body>

    <?php include('templates/nav.php'); ?>
    <h3 class="text-center margin-admin">ajout chapitre</h3>

    <div class="addPost m-2 p-2 m-md-5 p-md-5 border border-dark rounded">
        <form action="<?php echo $router->getBaseURL() ?>/posts/create" method="post">
            <div>
                <label for="titlePost">Titre du chapitre</label><br/>
                <input type="text" id="titlePost" name="titlePost"/>
            </div>
            <div>
                <label for="contentPost">Contenu du chapitre</label><br/>
                <textarea id="contentPost" name="contentPost"></textarea>
            </div>
            <div class="mt-3">
                <input class="btn btn-primary" type="submit" value="publier"/>
            </div>
        </form>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>