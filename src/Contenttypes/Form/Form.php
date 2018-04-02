<?php

namespace PandaAdmin\Core\Contenttypes\Form;


use PandaAdmin\Core\Contenttypes\Fields\FieldInterface;

class Form
{
    protected $fields = [];

    public function addField(FieldInterface $field)
    {
        $this->fields[] = $field;
    }
}