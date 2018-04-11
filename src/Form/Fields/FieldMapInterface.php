<?php

namespace PandaAdmin\Core\Form\Fields;


interface FieldMapInterface
{
    /**
     * @param string $field
     * @return string
     */
    public function getFieldClass(string $field) : string;
}