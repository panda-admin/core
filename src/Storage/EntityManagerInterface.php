<?php

namespace PandaAdmin\Core\Storage;


interface EntityManagerInterface
{
    public function getRepository($contentType): ContentRepositoryInterface;
}