<?php

namespace PandaAdmin\Core\Content;


class ContentType implements ContentTypeInterface
{
    protected $options;

    public function __construct($options)
    {
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }
}