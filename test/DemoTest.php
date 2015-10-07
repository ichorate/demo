<?php
namespace demoMd;

class DemoTest extends \PHPUnit_Framework_TestCase
{
    public function testMain()
    {
        $c = new MainClass('xxx');
        $c->say();


    }
}
