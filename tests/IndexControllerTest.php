<?php
require_once 'BaseTestCase.php';

class IndexControllerTest extends BaseTestCase
{
    public function testIndexPage()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertCount(1, $crawler->filter('h1:contains("Barebones Silex Application")'));
    }
}
