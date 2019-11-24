<?php

require 'private/includes/AltoRouter.php';


$CONFIG = require 'private/includes/config.php';
require 'private/includes/init.php';

$router = new AltoRouter();


$router->setBasePath($CONFIG['BASE_URL']);


$router->map( 'GET', '/', 'HomeController#homepage', 'home' );
$router->map( 'GET', '/over-ons', 'PageController#over', 'over' );
$router->map( 'GET', '/projecten', 'PageController#projecten', 'projecten' );
$router->map( 'GET', '/offerte-aanvragen', 'PageController#offerte', 'offerte' );
$router->map( 'GET|POST', '/contact', 'PageController#contact', 'contact' );



$match = $router->match();


if ( is_array( $match ) && is_callable( $match['target'] ) ) {

  call_user_func_array( $match['target'], $match['params'] );

} else if ( $match !== false ) {

  list( $controller_name, $method ) = explode( '#', $match['target'] );

  try {

    $controller = new $controller_name;


    call_user_func_array( [ $controller, $method ], $match['params'] );

  } catch ( \Exception $e ) {
    echo $e->getMessage();
    exit;
  }

} else {
  PageController::notFound();
}

?>
