<?php
require_once('dao/PostDAO.php');
require_once('dao/CommentDAO.php');
class FrontendController
{
    private $postDAO;
    private $commentDAO;
    public function __construct()
    {
        $this->postDAO = new PostDAO();
        $this->commentDAO = new CommentDAO();
        $this->router = new Router();
    }
    public function listPosts()
    {
        $posts = $this->postDAO->getPosts();
        $router = $this->router;
        require('view/accueil.php');
    }
    public function post($postId)
    {
        $post = $this->postDAO->getPost($postId);
        $comments = $this->commentDAO->getComments($postId);
        $posts = $this->postDAO->getPosts();
        $router = $this->router;
        require('view/chapitre.php');
    }
    public function addComment($postId, $reqData)
    {
        $author = $reqData['author'];
        $comment = $reqData['comment'];
        $affectedLines = $this->commentDAO->postComment($postId, $author, $comment);
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location:' . $this->router->getBaseURL() . '/posts/' . $postId);
        }
    }
    public function reportedComment($commentId)
    {
        $comment = $this->commentDAO->statusComment($commentId);
        header('location: ' . $this->router->getBaseURL() . '/');
    }
    public function connexionForm()
    {
        $router = $this->router;
        $posts = $this->postDAO->getPosts();
        if (isset($_COOKIE["session"])){
            require('view/admin.php');
        }
        else{
            require('view/connexion.php');
        }
    }
}
