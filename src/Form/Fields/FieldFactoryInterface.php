<?php

namespace PandaAdmin\Core\Form\Fields;


interface FieldFactoryInterface
{
    public function __construct(FieldMapInterface $fieldMap);

    public function make(string $field, array $options = []) : Types\FieldInterface;
}