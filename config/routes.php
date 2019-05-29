<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

$regex = array(
    'slug' => '[^:\/]+',
    'id' => '-?[0-9]+',
);

Router::prefix('admin', function (RouteBuilder $routes) use ($regex) {
    $routes->plugin('Cirici/Blocks', ['path' => '/blocks'], function (RouteBuilder $routes) use ($regex) {
        $routes->connect('/', [
            'controller' => 'Blocks',
            'action' => 'index'
        ]);
        $routes->connect('/index', [
            'controller' => 'Blocks',
            'action' => 'index'
        ]);
        $routes->connect('/add', [
            'controller' => 'Blocks',
            'action' => 'add'
        ]);

        $routes->fallbacks(DashedRoute::class);
    });
});