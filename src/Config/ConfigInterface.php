<?php

namespace PandaAdmin\Core\Config;


interface ConfigInterface
{
    public function __construct($config);

    public function getContentTypeOptions($type);
}