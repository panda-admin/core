<?php

namespace PandaAdmin\Core\Content\Fields;


abstract class AbstractField implements FieldInterface
{
    protected $component;

    abstract public function store();

    abstract public function load();

    public function getDefinition()
    {
        return [
            'data' => $this->load(),
            'component' => $this->component
        ];
    }
}