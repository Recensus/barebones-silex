<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 'on');

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../app.php';
require __DIR__.'/../src/Controllers.php';

$app->run();