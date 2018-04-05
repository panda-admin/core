<?php

namespace PandaAdmin\Core\Content\Fields;


class FieldMap
{
    protected $fields = [
        'text' => TextField::class,
        'html' => HtmlField::class,
        'image' => ImageField::class,
    ];

    protected $customFields = [];

    public function __construct()
    {

    }

    public function getFieldMap()
    {
        return array_merge($this->fields, $this->customFields);
    }
}