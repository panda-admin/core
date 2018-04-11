<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeInterface;

interface FormInterface
{
    /**
     * FormInterface constructor.
     * @param \PandaAdmin\Core\Content\ContentTypeInterface $contentType
     * @param array $fields
     * @param \PandaAdmin\Core\Content\ContentRecordInterface|null $contentRecord
     */
    public function __construct(ContentTypeInterface $contentType, array $fields, ContentRecordInterface $contentRecord = null);

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
}