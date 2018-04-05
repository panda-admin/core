<?php

namespace PandaAdmin\Core\Content;


use PandaAdmin\Core\Content\Form\FormBuilder;

class ContentType
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var \PandaAdmin\Core\Content\Form\FormBuilder
     */
    protected $builder;

    public function __construct($config, FormBuilder $builder)
    {
        $this->config = $config;
        $this->builder = $builder;
    }

    public function getFormDefinition()
    {
        return $this->builder->build($this->config['fields']);
    }
}