<?php

namespace PandaAdmin\Core\Controllers;


use PandaAdmin\Core\Contenttypes\Config;

class AdminController
{
    public function index(Config $config)
    {
        dump($config);
        die();
        return view('panda-admin::index');
    }
}