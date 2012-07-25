<?php

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

return $app;
