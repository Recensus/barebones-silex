<?php

use Silex\WebTestCase;

class BaseTestCase extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../app.php';
        $app['debug'] = true;
        unset($app['exception_handler']);

        require __DIR__.'/../src/Controllers.php';

        return $app;
    }
}
