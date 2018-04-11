<?php

namespace PandaAdmin\Core\Form\Fields;


class FieldMap implements FieldMapInterface
{
    protected $fieldMap;

    public function __construct($fieldMap)
    {
        $this->fieldMap = $fieldMap;
    }

    public function getFieldClass(string $field)
    {
        return $this->fieldMap[$field];
    }
}