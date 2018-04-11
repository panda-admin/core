<?php

namespace PandaAdmin\Core\Content;


interface ContentTypeInterface
{
    public function getName(): string;
    public function getOptions(): array;
}