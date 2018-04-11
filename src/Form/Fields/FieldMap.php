<?php

namespace PandaAdmin\Core\Form\Fields;


use PandaAdmin\Core\Form\Fields\Types\{
    HtmlField, ImageField, TextareaField, TextField
};

class FieldMap implements FieldMapInterface
{
    protected $fieldMap;

    protected static $defaultFields = [
        'text' => TextField::class,
        'textarea' => TextareaField::class,
        'html' => HtmlField::class,
        'image' => ImageField::class
    ];

    public function __construct($fieldMap = [])
    {
        $this->fieldMap = array_merge(self::$defaultFields, $fieldMap);
    }

    public function getFieldClass(string $field): string
    {
        return $this->fieldMap[$field];
    }
}