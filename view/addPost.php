<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css'/>
    <script src="scripts/tinymce/tinymce.min.js"></script>
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

    <div class="addPost">
        <p>ajouter un chapitre:</p>
        <form action="../index.php?action=addPost" method="post">
            <div>
                <label for="titlePost">Titre du chapitre</label><br />
                <input type="text" id="titlePost" name="titlePost" required/>
            </div>
            <div>
                <label for="contentPost">Contenu du chapitre</label><br />
                <textarea id="contentPost" name="contentPost" required></textarea>
            </div>
            <div>
                <input type="submit" value="publier"/>
            </div>
        </form>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.js'></script>
</body>
</html>
