<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeInterface;

interface FormInterface
{
    public function __construct(ContentTypeInterface $contentType,
                                ContentRecordInterface $contentRecord = null,
                                FormRendererInterface $renderer = null);

    /**
     * @return \PandaAdmin\Core\Content\ContentTypeInterface
     */
    public function getContentType(): ContentTypeInterface;

    /**
     * @return \PandaAdmin\Core\Content\ContentRecordInterface|null
     */
    public function getContentRecord(): ?ContentRecordInterface;

    /**
     * @return array
     */
    public function getFields(): array;

    /**
     * @return mixed
     */
    public function render();
}