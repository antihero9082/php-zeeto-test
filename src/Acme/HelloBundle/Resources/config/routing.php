<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('hello', new Route('/', array(
    '_controller' => 'AcmeHelloBundle:Hello:index',
)));
$collection->add('posts', new Route('/show_posts',array('_controller'=>'AcmeHelloBundle:Hello:show')));

return $collection;
