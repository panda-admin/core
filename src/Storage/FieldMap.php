<?php

namespace PandaAdmin\Core\Storage;


class FieldMap
{
    protected $fields = [
        'text' => Fields\TextField::class
    ];

    protected $customFields;

    public function __construct()
    {

    }

    public function getFieldMap()
    {
        return array_merge($this->fields, $this->customFields);
    }
}