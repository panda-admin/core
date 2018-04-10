<?php

require_once 'vendor/autoload.php';

$configFactory = new \PandaAdmin\Core\Config\ConfigFactory();

$config = $configFactory->create([
    'test' => 'configuration'
]);

var_dump($config);