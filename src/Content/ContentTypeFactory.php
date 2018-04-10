<?php

namespace PandaAdmin\Core\Content;


use PandaAdmin\Core\Config\Config;
use PandaAdmin\Core\Content\Form\FormBuilder;

class ContentTypeFactory implements ContentTypeFactoryInterface
{
    /**
     * @var \PandaAdmin\Core\Config\Config
     */
    private $config;

    /**
     * @var \PandaAdmin\Core\Content\Form\FormBuilder
     */
    protected $builder;

    public function __construct(Config $config, FormBuilder $builder)
    {
        $this->config = $config;
        $this->builder = $builder;
    }

    public function build($type)
    {
        return new ContentType($this->config->getContentTypeConfig($type), $this->builder);
    }
}