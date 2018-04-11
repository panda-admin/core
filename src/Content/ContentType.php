<?php

namespace PandaAdmin\Core\Content;


class ContentType implements ContentTypeInterface
{
    protected $name;

    protected $options;

    public function __construct($name, $options)
    {
        $this->options = $options;
        $this->name = $name;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getName(): string
    {
        return $this->name;
    }
}