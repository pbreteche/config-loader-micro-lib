<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 01/03/18
 * Time: 12:31
 */

namespace Pierre\ConfigLoader;

/**
 * Interface ConfigLoaderInterface
 *
 * @package Pierre\ConfigLoader
 */
interface ConfigLoaderInterface
{

    /**
     * @param string $filename
     *
     * @return array
     */
    public function load(string $filename): array;
}