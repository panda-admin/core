<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeFactoryInterface;

class FormFactory implements FormFactoryInterface
{
    /**
     * @var \PandaAdmin\Core\Content\ContentTypeFactoryInterface
     */
    protected $ctFactory;

    /**
     * FormFactory constructor.
     * @param \PandaAdmin\Core\Content\ContentTypeFactoryInterface $ctFactory
     */
    public function __construct(ContentTypeFactoryInterface $ctFactory)
    {
        $this->ctFactory = $ctFactory;
    }

    /**
     * @inheritdoc
     */
    public function make(string $contentType,
                         ContentRecordInterface $record = null,
                         FormRendererInterface $renderer = null): FormInterface
    {
        $ct = $this->ctFactory->make($contentType);

        return new Form($ct, $record, $renderer);
    }
}