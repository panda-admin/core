<?php

namespace PandaAdmin\Core\Contenttypes\Form;


use PandaAdmin\Core\Contenttypes\Fields\FieldMap;

class FormBuilder
{
    protected $fieldMap;

    public function __construct(FieldMap $fieldMap)
    {
        $this->fieldMap = $fieldMap->getFieldMap();
    }

    public function build(array $fields)
    {
        $form = new Form();

        foreach ($fields as $field) {
            $class = $this->fieldMap[$field['type']];
            $form->addField(new $class());
        }

        return $form;
    }
}