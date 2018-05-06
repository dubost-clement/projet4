<?php
require('routing/routes.php');
class Router
{
    private $routes = [];
    private $baseURL = '/projet4';
    public function __construct()
    {
        $this->routes = getRoutes();
    }
    public function matchRoute()
    {
        $matchingRoutes = array_filter($this->routes, function ($route) {
            $zippedRoutes = $this->zipRouteWithParameters($this->baseURL . $route["path"], $_SERVER["REQUEST_URI"]);
            return $this->compareZippedRoutes($zippedRoutes);
        });
        $matchingRoute = array_values($matchingRoutes)[0];
        $method = $matchingRoute["method"] ?? 'GET';
        $methodData = $GLOBALS['_' . $method];
        $controller = new $matchingRoute["controller"];
        $parameters = array_values($this->extractRouteParameters($this->baseURL . $matchingRoute["path"], $_SERVER["REQUEST_URI"]));
        array_push($parameters, $methodData);
        $controller->{$matchingRoute["action"]}(...$parameters);
    }
    public function zipRouteWithParameters($baseRoute, $currentRoute)
    {
        $zippedRoutes = array_map(null, $this->routeToArray($baseRoute), $this->routeToArray($currentRoute));
        return $zippedRoutes;
    }
    public function compareZippedRoutes($zippedRoutes)
    {
        return array_reduce($zippedRoutes, function ($acc, $curr) {
            return (!$acc) ? $acc : $this->compareRouteTokens($curr[0], $curr[1]);
        }, true);
    }
    public function compareRouteTokens($token1, $token2)
    {
        if (preg_match('/^\:/', $token1)) {
            return $token2 !== '';
        }
        return $token1 === $token2;
    }
    public function extractRouteParameters($baseRoute, $currentRoute)
    {
        $zippedRoutes = $this->zipRouteWithParameters($baseRoute, $currentRoute);
        $parameters = array_reduce($zippedRoutes, function ($acc, $curr) {
            if (preg_match('/^\:/', $curr[0])) {
                array_push($acc, $curr[1]);
            }
            return $acc;
        }, array());
        return $parameters;
    }
    public function routeToArray($route)
    {
        return explode('/', $route);
    }
    public function getBaseURL(){
        return $this->baseURL;
    }
}