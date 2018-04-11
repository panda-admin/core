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
        if(!\is_array($config)) {
            throw new \InvalidArgumentException('Configuration must be an array');
        }

        $this->config = $config;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getContentTypeConfig($type)
    {
        return $this->config[$type];
    }
}