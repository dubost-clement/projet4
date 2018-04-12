<?php

require_once __DIR__ . '/vendor/autoload.php';
require('controller/controller.php');

/**
 * Installation de composer: https://getcomposer.org/download/
 * Doc TWIG: https://twig.symfony.com/doc/2.x/templates.html
 */

$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addExtension(new Twig_Extension_Debug());


try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts($twig);
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addPost'){
            if (!empty($_POST['titlePost']) && !empty($_POST['contentPost'])){
            addPost($_POST['titlePost'], $_POST['contentPost']);
            }
            else{
                throw new Exception('tous les champs ne sont pas remplis');
            }
        }
        elseif ($_GET['action'] == 'admin'){
            admin();
        }

        elseif ($_GET['action'] == 'newPost'){
            newPost();
        }
        elseif ($_GET['action'] == 'updateList'){
            updateList();
        }
        elseif ($_GET['action'] == 'updatePost'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                postUpdate();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'updateConfirmation'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['titlePost']) && !empty($_POST['contentPost'])) {
                    updateConfirmation($_POST['titlePost'], $_POST['contentPost'], $_GET['id']);
                }
                else {
                    throw new Exception('tous les champs ne sont pas remplis !');
                }
            }
        }
        elseif ($_GET['action'] == 'delete'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deletePost($_GET['id']);
            }
        }
    }

    else {
        listPosts();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}
