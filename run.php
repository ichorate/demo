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



function testDiConfig($environment)
{
    $builder = new \DI\ContainerBuilder();
    $builder->addDefinitions("diconfig.php");
    $builder->addDefinitions("diconfig.$environment.php");
    $container = $builder->build();


    $container->call(function ($dbHost) {
        echo $dbHost;
    }, ['dbHost' => \DI\get('db.host')]);
}

testDiConfig('dev');
testDiConfig('prod');
