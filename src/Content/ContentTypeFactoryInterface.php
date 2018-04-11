<?php

namespace PandaAdmin\Core\Content;


use PandaAdmin\Core\Config\ConfigInterface;

interface ContentTypeFactoryInterface
{
    public function __construct(ConfigInterface $config);

    public function make(string $name) : ContentTypeInterface;
}