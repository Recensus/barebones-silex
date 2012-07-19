<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\Helper\SlotsHelper;

$app = new Silex\Application();
$app['debug'] = true;

// set up templating engine
$app['view'] = $app->share(function() {
    $loader = new FilesystemLoader(__DIR__ . '/views/%name%');
    $view = new PhpEngine(new TemplateNameParser(), $loader);
    $view->set(new SlotsHelper());

    return $view;
});

$app->get('/', function(Silex\Application $app) {
    return $app['view']->render('index.phtml');
});

$app->run();
