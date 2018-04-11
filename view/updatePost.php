<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <title>modifier chapitre</title>
</head>
<body>

    <?php include('templates/nav.php'); ?>

    <div class="updatePost">
        <p>modification chapitre:</p>
        <form action="index.php?action=updateConfirmation&amp;id=<?php echo $post->getId(); ?>" method="post">
            <div>
                <label for="titlePost">Titre du chapitre</label><br />
                <input type="text" id="titlePost" name="titlePost" value="<?php echo htmlspecialchars($post->getTitle()); ?>"/>
            </div>
            <div>
                <label for="contentPost">Contenu du chapitre</label><br />
                <textarea id="contentPost" name="contentPost"><?php echo htmlspecialchars($post->getContent()); ?></textarea>
            </div>
            <div>
                <input type="submit" value="modifier"/>
            </div>
        </form>
    </div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script> 
</body>
</html>