<?php
require('controller/FrontendController.php');
require('controller/BackendController.php');
require('routing/Router.php');

$frontendController = new FrontendController();
$backendController = new BackendController();

$router = new Router();
$router->matchRoute();