<?php

namespace PandaAdmin\Core\Form\Fields;


interface FieldFactoryInterface
{
    public function make(string $field) : FieldInterface;
}