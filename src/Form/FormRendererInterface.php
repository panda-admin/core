<?php

namespace PandaAdmin\Core\Form;


interface FormRendererInterface
{
    public function render(FormInterface $form);
}