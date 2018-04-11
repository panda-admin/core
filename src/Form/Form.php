<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeInterface;

class Form implements FormInterface
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
     * @var \PandaAdmin\Core\Form\FormRendererInterface
     */
    protected $renderer;

    /**
     * Form constructor.
     * @param \PandaAdmin\Core\Content\ContentTypeInterface $contentType
     * @param \PandaAdmin\Core\Content\ContentRecordInterface|null $contentRecord
     * @param \PandaAdmin\Core\Form\FormRendererInterface|null $renderer
     */
    public function __construct(ContentTypeInterface $contentType, ContentRecordInterface $contentRecord = null, FormRendererInterface $renderer = null)
    {
        $this->contentType = $contentType;
        $this->contentRecord = $contentRecord;
        $this->renderer = $renderer;
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
     * @return mixed
     */
    public function render()
    {
        return $this->renderer->render();
    }
}