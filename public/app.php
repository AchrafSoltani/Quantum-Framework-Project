<?php
use App\Library\Service;

require '../vendor/autoload.php';

$container = new League\Container\Container;

// register the service as a prototype against an alias
$container->add('service', 'App\Library\Service');

$service1 = $container->get('service');
$service2 = new App\Library\Service;

var_dump($service1 instanceof Service);
