<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 01/03/18
 * Time: 12:41
 */

namespace Pierre\ConfigLoader;


class JsonConfigLoader extends ConfigLoader
{

    /**
     * @param string $filename
     *
     * @return array
     */
    public function load(string $filename): array
    {
        return json_decode(file_get_contents($this->getFilePath($filename)), true);
    }
}