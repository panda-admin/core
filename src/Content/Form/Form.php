<?php

namespace PandaAdmin\Core\Content\Form;


use PandaAdmin\Core\Content\Fields\FieldInterface;

class Form implements \JsonSerializable
{
    protected $fields = [];

    public function addField(FieldInterface $field)
    {
        $this->fields[] = $field;
    }

    public function jsonSerialize()
    {
        foreach ($this->fields as $field) {
            $fields[] = $field->getDefinition();
        }

        return compact('fields');
    }
}