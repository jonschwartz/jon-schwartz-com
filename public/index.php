<?php

require_once dirname(dirname(__FILE__)).'/vendor/autoload.php';

use Symfony\Component\Routing\Route;

if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}


$routes = new \Symfony\Component\Routing\RouteCollection();

$indexActionRoute = new Route('/', [
    'controller' => 'Jon\Controller\IndexController',
    'action' => 'indexAction'
]);

$routes->add('indexAction', $indexActionRoute);

$context = new \Symfony\Component\Routing\RequestContext($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);

$matcher = new \Symfony\Component\Routing\Matcher\UrlMatcher($routes, $context);

$params = $matcher->match($_SERVER['REQUEST_URI']);

$controllerName = $params['controller'];
$action = $params['action'];

$sm = \Jon\Model\Repository\ServiceManagerFactory::getServiceManager();

$controller = new $controllerName($sm);

$controller->$action();