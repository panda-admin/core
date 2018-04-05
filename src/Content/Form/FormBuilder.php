<?php

namespace PandaAdmin\Core\Content\Form;


use PandaAdmin\Core\Content\Fields\FieldMap;

class FormBuilder
{
    protected $fieldMap;

    public function __construct(FieldMap $fieldMap)
    {
        $this->fieldMap = $fieldMap->getFieldMap();
    }

    public function build($fields)
    {
        $form = new Form();

        foreach ($fields as $field) {
            $class = $this->fieldMap[$field['type']];
            $form->addField(new $class());
        }

        return $form;
    }
}