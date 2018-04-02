<?php

namespace PandaAdmin\Core\Contenttypes\Fields;


class FieldMap
{
    protected $fields = [
        'text' => TextField::class
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