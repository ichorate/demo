<?php
require __dir__.'\vendor\autoload.php';

$c = new \demoMd\MainClass('xxx');
$c->say();

function testDi()
{
    $container = \DI\ContainerBuilder::buildDevContainer();
    $s = $container->get('\demoMd\Service');
    echo $s->get('x');
}

testDi();