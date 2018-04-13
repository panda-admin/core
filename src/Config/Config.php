<?php

namespace PandaAdmin\Core\Config;

class Config implements ConfigInterface
{
    /**
     * Main configuration array
     * @var array
     */
    protected $config;

    /**
     * Config constructor.
     * @param $config
     * @throws \InvalidArgumentException If $config is not an array
     */
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

    public function getContentTypeOptions($type)
    {
        return $this->config[$type];
    }
}