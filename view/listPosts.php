<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <title>Gestion chapitre</title>
</head>
<body>

    <?php include('templates/nav.php'); ?>

    <h2>chapitre à modifier :</h2>

    <?php
    foreach ($posts as $post)
    {
    ?>
    <div class="posts">
        <a href="index.php?action=updatePost&amp;id=<?php echo $post->getId(); ?>"><?php echo htmlspecialchars($post->getTitle()); ?></a>
    </div>
    <?php
    }
    ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script> 
</body>
</html>