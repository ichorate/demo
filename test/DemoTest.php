<?php

namespace demoMd;

class DemoTest extends \PHPUnit_Framework_TestCase
{
    public function testMain()
    {
        $c = new MainClass('xxx');
        $c->say();


    }

    public function testDb()
    {
        $db = new Db();
        $db->connect();
    }

    public function testDi()
    {
        $container = \DI\ContainerBuilder::buildDevContainer();
        $s = $container->get('Service');
        $this->assertEquals($s->get('x'), 'x');
    }
}
