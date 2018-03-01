<?php

namespace Pierre\ConfigLoader;

/**
 * Class ConfigLoader
 */
abstract class ConfigLoader implements ConfigLoaderInterface
{
    const DEFAULT = [
        'includePath' => 'config',
        'format' => 'yml',
    ];

    protected $options;

    /**
     * ConfigLoader constructor.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->options = array_replace(self::DEFAULT, $parameters);
    }

    protected function getFilePath($filename)
    {
        return $this->options['includePath'] . $filename . '.' . $this->options['format'];
    }

}