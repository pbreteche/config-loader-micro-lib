<?php

use PHPUnit\Framework\TestCase;
use Pierre\ConfigLoader\YamlConfigLoader;

/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 01/03/18
 * Time: 12:53
 */

/**
 * Class YamlTest
 */
class YamlTest extends TestCase
{

    /**
     * Test that config file is loaded
     *
     * This test is pretty awesome. And that because a very good reason:
     * I wrote it by myself.
     *
     * @dataProvider provideConfig
     */
    public function testLoad($filename, $subset)
    {
        $loader = new YamlConfigLoader([
            'includePath' => __DIR__ . '/samples/yaml/',
            'format' => 'yml'
        ]);

        $config = $loader->load($filename);

        $this->assertArraySubset($subset, $config);

    }

    /**
     * @return array
     */
    public function provideConfig()
    {
        return [
            [
                'sample1', [
                'database' => [
                    'host' => 'localhost',
                    'base' => 'my-database',
                    'username' => 'root',
                    'password' => 'secret',
                ]
            ]
            ],
            [
                'sample2', [
                'database' => [
                    'host' => 'localhost',
                    'base' => 'my-database',
                    'username' => 1234,
                    'password' => 5364,
                ]
            ]
            ],
        ];
    }
}