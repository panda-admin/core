<?php

namespace PandaAdmin\Core\Form;


interface FormFactoryInterface
{
    public function make() : FormInterface;
}