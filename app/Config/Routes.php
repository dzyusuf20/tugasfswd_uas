<?php

// File: app/Config/Routes.php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

$routes->get('/', 'Auth::index');
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

$routes->group('documents', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Document::index');
    $routes->match(['get', 'post'], 'upload', 'Document::upload');
    $routes->get('preview/(:num)', 'Document::preview/$1');
    $routes->get('search', 'Document::search');
});

$routes->group('categories', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Category::index');
    $routes->match(['get', 'post'], 'add', 'Category::add');
});
