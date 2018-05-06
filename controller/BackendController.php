<?php
require_once('dao/PostDAO.php');
require_once('dao/CommentDAO.php');
require_once('dao/UserDAO.php');
class BackendController
{
    private $postDAO;
    private $commentDAO;
    private $userDAO;
    public function __construct()
    {
        $this->postDAO = new PostDAO;
        $this->commentDAO = new CommentDAO;
        $this->userDAO = new UserDAO;
        $this->router = new Router();
    }
    public function connexion($reqData)
    {
        $pseudo = $reqData["pseudo"] ?? "";
        $password = $reqData["password"] ?? "";
        $user = $this->userDAO->connect($pseudo);
        $posts = $this->postDAO->getPosts();
        $router = $this->router;
        if (password_verify($password, $user->getPassword())) {
            $cookieValue = 'connexion';
            setcookie("session", $cookieValue, time() + 1200);
            header('Location: ' . $this->router->getBaseURL() . '/connexion');
        } else {
            require('view/connexion.php');
        }
    }
    public function disconnect()
    {
        $cookieValue = 'connexion';
        setcookie("session", $cookieValue, time() - 1200);
        header('Location: ' . $this->router->getBaseURL() . '/');
    }
    public function newPost()
    {
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $posts = $this->postDAO->getPosts();
            require('view/addPost.php');
        } else {
            require('view/connexion.php');
        }
    }
    public function addPost($reqData)
    {
        $titlePost = $reqData["titlePost"];
        $contentPost = $reqData["contentPost"];
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $post = $this->postDAO->createPost($titlePost, $contentPost);
            if ($post === false) {
                throw new Exception('Impossible de créer l\'article !');
            } else {
                header('Location: ' . $this->router->getBaseURL() . '/');
            }
        } else {
            require('view/connexion.php');
        }
    }
    public function updateList()
    {
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $posts = $this->postDAO->getPosts();
            require('view/listPosts.php');
        } else {
            require('view/connexion.php');
        }
    }
    public function postUpdate($postId)
    {
        var_dump($postId);
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $post = $this->postDAO->getPost($postId);
            $posts = $this->postDAO->getPosts();
            require('view/updatePost.php');
        } else {
            require('view/connexion.php');
        }
    }
    public function updateConfirmation($postId, $reqData)
    {
        $titlePost = $reqData["titlePost"];
        $contentPost = $reqData["contentPost"];
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $post = $this->postDAO->updatePost($titlePost, $contentPost, $postId);
            header('Location: ' . $this->router->getBaseURL() . '/posts/' . $postId);
        } else {
            require('view/connexion.php');
        }
    }
    public function deletePost($postId)
    {
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $post = $this->postDAO->deletePost($postId);
            header('Location: ' . $this->router->getBaseURL() . '/');
        } else {
            require('view/connexion.php');
        }
    }
    public function reportedList()
    {
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $comment = $this->commentDAO->commentList();
            $posts = $this->postDAO->getPosts();
            require('view/commentaires.php');
        } else {
            require('view/connexion.php');
        }
    }
    public function deleteComments($commentId)
    {
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $comment = $this->commentDAO->deleteComment($commentId);
            header('Location: ' . $this->router->getBaseURL() . '/comments/reported');
        } else {
            require('view/connexion.php');
        }
    }
    public function acceptComments($commentId)
    {
        $router = $this->router;
        if (isset($_COOKIE["session"])) {
            $comment = $this->commentDAO->acceptComment($commentId);
            header('Location: ' . $this->router->getBaseURL() . '/comments/reported');
        } else {
            require('view/connexion.php');
        }
    }
}