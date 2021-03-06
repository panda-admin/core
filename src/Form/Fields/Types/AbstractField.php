<?php

namespace PandaAdmin\Core\Form\Fields\Types;


use JsonSerializable;

abstract class AbstractField implements FieldInterface, JsonSerializable
{
    protected $component;

    protected $value;

    protected $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize()
    {
        return [
            'component' => $this->component,
            'value' => $this->value,
            'options' => $this->options,
        ];
    }
}