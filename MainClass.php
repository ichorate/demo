<?php

namespace demoMd;

class MainClass
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function say()
    {
        echo $this->name;
    }
}
