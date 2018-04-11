<?php

namespace PandaAdmin\Core\Form\Fields;


class FieldFactory implements FieldFactoryInterface
{
    /**
     * @var \PandaAdmin\Core\Form\Fields\FieldMapInterface
     */
    private $fieldMap;

    public function __construct(FieldMapInterface $fieldMap)
    {
        $this->fieldMap = $fieldMap;
    }

    public function make(string $field): FieldInterface
    {
        $class = $this->fieldMap->getFieldClass($field);

        return new $class();
    }
}