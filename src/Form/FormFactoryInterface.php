<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeFactoryInterface;
use PandaAdmin\Core\Form\Fields\FieldFactoryInterface;

interface FormFactoryInterface
{
    public function __construct(ContentTypeFactoryInterface $ctFactory, FieldFactoryInterface $fieldFactory);

    /**
     * @param string $contentType
     * @param \PandaAdmin\Core\Content\ContentRecordInterface|null $record
     * @return \PandaAdmin\Core\Form\FormInterface
     */
    public function make(string $contentType, ContentRecordInterface $record = null): FormInterface;
}