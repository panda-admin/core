<?php

namespace PandaAdmin\Core\Config;

class Config implements ConfigInterface
{
    /**
     * Main configuration array
     * @var array
     */
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getContentTypeConfig($type)
    {
        return $this->config[$type];
    }
}