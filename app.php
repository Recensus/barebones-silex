<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

$app = new Silex\Application();

$app->get('/', function() {
    return "<!DOCTYPE html><html><body><h1>Barebones Silex Application</h1></body></html>";
});

$app->run();

return $app;
