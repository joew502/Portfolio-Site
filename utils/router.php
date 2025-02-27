<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './controllers/homepage_controller.php',
    '/cv' => './controllers/cv_controller.php',
    '/services' => './controllers/services_controller.php',
    '/contact' => './controllers/contact_controller.php',
    '/projects' => './controllers/projects_controller.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require './views/404.php';

    die();
}

routeToController($uri, $routes);