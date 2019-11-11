<?php

include "route.php";
include "private/classes/router.php";

$route = new Route();

$route->add('/', 'Home');


$route->submit();

?>
