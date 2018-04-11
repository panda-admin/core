<?php

namespace PandaAdmin\Core\Content;


use PandaAdmin\Core\Config\ConfigInterface;

class ContentTypeFactory implements ContentTypeFactoryInterface
{
    /**
     * @var ConfigInterface
     */
    protected $config;

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function make(string $name) : ContentTypeInterface
    {
        return new ContentType($this->config->getContentTypeOptions($name));
    }
}