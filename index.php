<?php

require_once dirname(__FILE__).'/vendor/autoload.php';


use Symfony\Component\Routing\Route;

$routes = new \Symfony\Component\Routing\RouteCollection();

$indexActionRoute = new Route('/', ['_controller' => 'Jon\Controller\IndexController']);

$routes->add('indexAction', $indexActionRoute);

$context = new \Symfony\Component\Routing\RequestContext($_SERVER['PHP_SELF'], $_SERVER['REQUEST_METHOD']);

$matcher = new \Symfony\Component\Routing\Matcher\UrlMatcher($routes, $context);

$params = $matcher->match($_SERVER['PHP_SELF']);

//$controller = new $params['_controller']();

var_dump($params);