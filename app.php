<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

$app = new Silex\Application();

// register monolog provider
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/log/project.log'
));

// register session provider
$app->register(new Silex\Provider\SessionServiceProvider());

$app->get('/', function() {
    return "<!DOCTYPE html><html><body><h1>Barebones Silex Application</h1></body></html>";
});

$app->run();

return $app;
