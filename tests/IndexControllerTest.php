<?php

use Silex\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../app.php';
        $app['debug'] = true;
        unset($app['exception_handler']);

        return $app;
    }

    public function testIndexPage()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertCount(1, $crawler->filter('h1:contains("Barebones Silex Application")'));
    }
}
