<?php

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testExceptionOnNonArrayConfig()
    {
        $this->expectException(\InvalidArgumentException::class);

        new \PandaAdmin\Core\Config\Config('string');
    }

    public function testGetContetTypeConfig()
    {
        $config = new \PandaAdmin\Core\Config\Config([
            'type1' => [
                'fields' => []
            ]
        ]);

        $this->assertArraySubset(['fields' => []], $config->getContentTypeConfig('type1'));
    }
}