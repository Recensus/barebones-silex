<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

$app = new Silex\Application();

// register monolog provider
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/log/project.log'
));

// register twig provider
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views'
));

// register session provider
$app->register(new Silex\Provider\SessionServiceProvider());

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.html.twig');
});

$app->run();

return $app;
