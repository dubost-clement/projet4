<?php
//namespace Blog\Controller;


require_once('dao/PostDAO.php');
require_once('dao/CommentDAO.php');

/*use Blog\DAO\CommentDAO;
use Blog\DAO\PostDAO;*/


/**
 * @param $twig Twig_Environment
 */
function listPosts($twig)
{
    $postDAO = new PostDAO();
    $posts = $postDAO->getPosts();

    echo $twig->render('list-posts.html.twig', array('posts' => $posts));

    //require('view/accueil.php');
}

function post()
{
    $postDAO = new PostDAO();
    $commentDAO = new CommentDAO();

    $post = $postDAO->getPost($_GET['id']);
    $comment = $commentDAO->getComments($_GET['id']);
    $posts = $postDAO->getPosts();

    //echo $twig->render('chapitre.html.twig', array('posts' => $posts, 'post' => $post, 'comments' => $comment));
    require('view/chapitre.php');
}

function addPost($titlePost, $contentPost)
{
    $postDAO = new PostDAO();
    $post = $postDAO->createPost($titlePost, $contentPost);

    if ($post === false){
        throw new Exception('Impossible de créer l\'article !');
    }
    else{
        header('Location: index.php');
    }
}

function addComment($postId, $author, $comment)
{
    $commentDAO = new CommentDAO();

    $affectedLines = $commentDAO->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}



