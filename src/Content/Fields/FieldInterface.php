<?php

namespace PandaAdmin\Core\Content\Fields;


interface FieldInterface
{
    public function store();
    public function load();
    public function getDefinition();
}