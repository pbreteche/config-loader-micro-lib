<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 01/03/18
 * Time: 12:31
 */

namespace Pierre\ConfigLoader;

/**
 * Class YamlConfigLoader
 */
class YamlConfigLoader extends ConfigLoader
{

    /**
     * @param string $filename
     *
     * @return array
     */
    public function load(string $filename): array
    {
        return yaml_parse_file($this->getFilePath($filename));
    }
}