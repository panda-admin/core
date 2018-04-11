<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeFactoryInterface;

interface FormFactoryInterface
{
    public function __construct(ContentTypeFactoryInterface $ctFactory);

    /**
     * @param string $contentType
     * @param \PandaAdmin\Core\Content\ContentRecordInterface|null $record
     * @param \PandaAdmin\Core\Form\FormRendererInterface|null $renderer
     * @return \PandaAdmin\Core\Form\FormInterface
     */
    public function make(string $contentType,
                         ContentRecordInterface $record = null,
                         FormRendererInterface $renderer = null): FormInterface;
}