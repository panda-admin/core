<?php

namespace PandaAdmin\Core\Controllers;


use PandaAdmin\Core\Contenttypes\Config;

class AdminController
{
    public function index(Config $config)
    {
        return view('panda-admin::index');
    }
}