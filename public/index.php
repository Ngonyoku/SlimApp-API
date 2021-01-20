<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';
require '../src/config/DB.php';

$app = new \Slim\App;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});

// Customer Routes
require '../src/routes/customers.php';

$app->run();