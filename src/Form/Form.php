<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeInterface;

class Form implements FormInterface, \JsonSerializable
{
    /**
     * @var \PandaAdmin\Core\Content\ContentTypeInterface
     */
    protected $contentType;

    /**
     * @var \PandaAdmin\Core\Content\ContentRecordInterface
     */
    protected $contentRecord;

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * Form constructor.
     * @inheritdoc
     */
    public function __construct(ContentTypeInterface $ct, array $fields, ContentRecordInterface $cr = null)
    {
        $this->contentType = $ct;
        $this->contentRecord = $cr;
        $this->fields = $fields;
    }

    /**
     * @return \PandaAdmin\Core\Content\ContentTypeInterface
     */
    public function getContentType(): ContentTypeInterface
    {
        return $this->contentType;
    }

    /**
     * @return \PandaAdmin\Core\Content\ContentRecordInterface|null
     */
    public function getContentRecord(): ?ContentRecordInterface
    {
        return $this->contentRecord;
    }

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'content_type' => $this->getContentType()->getName(),
            'fields' => $this->getFields(),
        ];
    }
}