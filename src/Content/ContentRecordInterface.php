<?php

namespace PandaAdmin\Core\Content;


interface ContentRecordInterface
{
    public function getFieldValue(string $field);
}