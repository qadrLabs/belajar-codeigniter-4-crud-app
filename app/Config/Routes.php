<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Post::index');
$routes->get('/post', 'Post::index');
$routes->get('/post/create', 'Post::create');
$routes->post('/post/store', 'Post::store');
$routes->get('/post/edit/(:num)', 'Post::edit/$1');
$routes->put('/post/update/(:num)', 'Post::update/$1');
$routes->delete('/post/destroy/(:num)', 'Post::destroy/$1');
