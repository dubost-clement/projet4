<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un chapitre</title>
</head>
<body>

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

</body>
</html>
