<?php

$app = new Silex\Application();

$app->get('/', function() {
    return "<h1>Barebones Silex App</h1>";
});

$app->run();
