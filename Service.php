<?php

namespace demoMd;

class Service
{
    public $config;
    public function __construct(Config $config)
    {
        $this->config = $config;
    }
    public function get($key)
    {
        return $this->config->get($key);
    }

}
