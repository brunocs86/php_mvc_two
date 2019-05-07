<?php

require __DIR__.'/vendor/autoload.php';

$controller = new SON\Controller;
$controller2 = new App\Controllers\UsersControllers;

echo $controller->handler();
echo ' ';
echo $controller2->handler();