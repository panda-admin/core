<?php

namespace PandaAdmin\Core\Contenttypes;


class Config
{
    protected $contentTypes;

    public function __construct(array $contentTypes)
    {
        $this->contentTypes = $contentTypes;
    }

    public function getConfig($contentType)
    {

    }
}