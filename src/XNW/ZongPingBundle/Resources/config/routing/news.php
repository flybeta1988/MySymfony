<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('news_index', new Route(
    '/',
    array('_controller' => 'XNWZongPingBundle:News:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('news_show', new Route(
    '/{id}/show',
    array('_controller' => 'XNWZongPingBundle:News:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('news_new', new Route(
    '/new',
    array('_controller' => 'XNWZongPingBundle:News:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('news_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'XNWZongPingBundle:News:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('news_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'XNWZongPingBundle:News:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
