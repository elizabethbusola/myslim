<?php

//when we create resful apis we create routes that deals with request and response objects.
//every slim object has request and response given as the call back routine
//http is the standard for http messaging
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
//created by composers and allowed for slim dependencies
require '../vendor/autoload.php';
require '../src/config/db.php';
//create main slim object and is used to create our route
$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    //helps us write to the screen
    $response->getBody()->write("Hello, $name");
//then the response is returned.s
    return $response;
});

//Customer Routes
require '../src/routes/customers.php';
$app->run();
