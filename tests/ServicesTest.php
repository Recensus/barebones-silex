<?php

require_once 'BaseTestCase.php';

class ServicesTests extends BaseTestCase
{
    public function testMonologProviderIsRegistered()
    {
        $this->assertTrue($this->app['monolog'] instanceof Monolog\Logger, 
                          "Monolog is not registered as a service provider");
    }

    public function testSessionProviderIsRegistered()
    {
        $this->assertTrue($this->app['session'] instanceof Symfony\Component\HttpFoundation\Session\Session, 
                          "Session Provider is not registered");
    }
}
