<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('subscribers', new Route('/', array(
    '_controller' => 'AcmeHelloBundle:Subscribers:index',
)));

$collection->add('subscribers_show', new Route('/{id}/show', array(
    '_controller' => 'AcmeHelloBundle:Subscribers:show',
)));

$collection->add('subscribers_new', new Route('/new', array(
    '_controller' => 'AcmeHelloBundle:Subscribers:new',
)));

$collection->add('subscribers_create', new Route(
    '/create',
    array('_controller' => 'AcmeHelloBundle:Subscribers:create'),
    array('_method' => 'post')
));

$collection->add('subscribers_edit', new Route('/{id}/edit', array(
    '_controller' => 'AcmeHelloBundle:Subscribers:edit',
)));

$collection->add('subscribers_update', new Route(
    '/{id}/update',
    array('_controller' => 'AcmeHelloBundle:Subscribers:update'),
    array('_method' => 'post')
));

$collection->add('homepage', new Route('..',array('_controller'=>'AcmeHelloBundle:Hello:index')));

$collection->add('subscribers_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AcmeHelloBundle:Subscribers:delete'),
    array('_method' => 'post')
));

return $collection;
