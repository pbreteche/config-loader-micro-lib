<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 01/03/18
 * Time: 14:14
 */

use Pierre\ConfigLoader\JsonConfigLoader;

/**
 * Class JsonTest
 */
class JsonTest extends \PHPUnit\Framework\TestCase
{

    /**
     *
     * @dataProvider provideConfig
     */
    public function testLoad($filename, $subset)
    {
        $loader = new JsonConfigLoader([
            'includePath' => __DIR__ . '/samples/json/',
            'format' => 'json'
        ]);

        $config = $loader->load($filename);

        $this->assertArraySubset($subset, $config);

    }

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