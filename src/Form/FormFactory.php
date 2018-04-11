<?php

namespace PandaAdmin\Core\Form;


use PandaAdmin\Core\Content\ContentRecordInterface;
use PandaAdmin\Core\Content\ContentTypeFactoryInterface;
use PandaAdmin\Core\Form\Fields\FieldFactoryInterface;

class FormFactory implements FormFactoryInterface
{
    /**
     * @var \PandaAdmin\Core\Content\ContentTypeFactoryInterface
     */
    protected $ctFactory;

    /**
     * @var \PandaAdmin\Core\Form\Fields\FieldFactoryInterface
     */
    protected $fieldFactory;

    /**
     * FormFactory constructor.
     * @param \PandaAdmin\Core\Content\ContentTypeFactoryInterface $ctFactory
     * @param \PandaAdmin\Core\Form\Fields\FieldFactoryInterface $fieldFactory
     */
    public function __construct(ContentTypeFactoryInterface $ctFactory, FieldFactoryInterface $fieldFactory)
    {
        $this->ctFactory = $ctFactory;
        $this->fieldFactory = $fieldFactory;
    }

    /**
     * @inheritdoc
     */
    public function make(string $contentType, ContentRecordInterface $record = null): FormInterface
    {
        $ct = $this->ctFactory->make($contentType);

        $ctOptions = $ct->getOptions();

        $fields = [];

        foreach ($ctOptions['fields'] as $name => $field) {

            /** @var \PandaAdmin\Core\Form\Fields\Types\AbstractField $newField */
            $newField = $this->fieldFactory->make($field['type']);

            if($record !== null) {
                $newField->setValue($record->getFieldValue($name));
            }

            $fields[$name] = $newField;
        }

        return new Form($ct, $fields, $record);
    }
}