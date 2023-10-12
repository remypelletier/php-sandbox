
<?php

define('PAGE_DIR', './src/page');
define('LAYOUT_DIR', './src/layout');

include_once './core/Controller.php';
include_once './core/Router.php';

$routes = [
    '/' => new Controller('Home', 'home.php', 'layout.php'),
    '/contact' => new Controller('Contact', 'contact.php', 'layout.php'),
    '/projets' => new Controller('Projets', 'projects.php', 'layout.php')
];

$router = new Router($routes);

$router->start();

?>