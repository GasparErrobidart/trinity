<?php
use Trinity\Router\Router            as Router;
use Trinity\Response\ErrorResponse   as ErrorResponse;
use Controller\ExamplePageController as ExamplePageController;

$examplePageController = new ExamplePageController();

$router = new Router();

// PROVIDE A CONTROLLER AND METHOD NAME TO HANDLE THIS ROUTE
// THIS ROUTE IS FOR MATCHING THE REGULAR EXPRESSION /\//
// IN PRACTICE MATCHING "/" PATH IF THE REQUEST METHOD IS EQUAL TO "GET"
$router->get('\/',array( $examplePageController , 'index' ));
// THIS ROUTE APPLIES TO ALL HTTP METHODS
// 404 ROUTE GOES AT THE BOTTOM BECAUSE ROUTER MATCHES THE FIRST ROUTE IT CAN FIND
// MOVING THIS ROUTE TO THE TOP WILL CAUSE ALL RESPONSES TO BE 404
$router->all('.*',array(
    new ErrorResponse(
      array(
        'code' => 404,
        'body' => "404 Page not Found!"
      )
    ),
    'send' // ERROR RESPONSE send() METHOD
  )
);
