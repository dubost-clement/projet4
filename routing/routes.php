<?php
function getRoutes()
{
    $routes = array(
        array(
            "path" => "/",
            "controller" => "FrontendController",
            "action" => "listPosts"
        ),
        array(
            "path" => "/connexion",
            "controller" => "FrontendController",
            "action" => "connexionForm"
        ),
        array(
            "path" => "/login",
            "controller" => "BackendController",
            "action" => "connexion",
            "method" => "POST"
        ),
        array(
            "path" => "/disconnect",
            "controller" => "BackendController",
            "action" => "disconnect",
            "method" => "POST"
        ),
        array(
            "path" => "/comments/:commentId/report",
            "controller" => "FrontendController",
            "action" => "reportedComment"
        ),
        array(
            "path" => "/comments/:commentId/add",
            "controller" => "FrontendController",
            "action" => "addComment",
            "method" => "POST"
        ),
        array(
            "path" => "/comments/reported",
            "controller" => "BackendController",
            "action" => "reportedList"
        ),
        array(
            "path" => "/comments/:commentId/delete",
            "controller" => "BackendController",
            "action" => "deleteComments",
            "method" => "POST"
        ),
        array(
            "path" => "/comments/:commentId/accept",
            "controller" => "BackendController",
            "action" => "acceptComments",
            "method" => "POST"
        ),
        array(
            "path" => "/posts",
            "controller" => "BackendController",
            "action" => "updateList"
        ),
        array(
            "path" => "/posts/new",
            "controller" => "BackendController",
            "action" => "newPost"
        ),
        array(
            "path" => "/posts/create",
            "controller" => "BackendController",
            "action" => "addPost",
            "method" => "POST"
        ),
        array(
            "path" => "/posts/:postId",
            "controller" => "FrontendController",
            "action" => "post"
        ),
        array(
            "path" => "/posts/:postId/update",
            "controller" => "BackendController",
            "action" => "postUpdate"
        ),
        array(
            "path" => "/posts/:postId/update/confirm",
            "controller" => "BackendController",
            "action" => "updateConfirmation",
            "method" => "POST"
        ),
        array(
            "path" => "/posts/:postId/delete",
            "controller" => "BackendController",
            "action" => "deletePost",
            "method" => "POST"
        )
    );
    return $routes;
}