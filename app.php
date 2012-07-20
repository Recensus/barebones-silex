<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views'
));

$app->get('/', function() {
    return $app['twig']->render('index.twig');
});

$app->run();
