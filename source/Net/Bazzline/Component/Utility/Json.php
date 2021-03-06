<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-22 
 */

namespace Net\Bazzline\Component\Utility;

use stdClass;

/**
 * Class Json
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-22
 */
class Json
{
    /**
     * @param string $name
     * @param bool $asArray
     * @return array|stdClass
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-22
     */
    public function getContent($name, $asArray = false)
    {
        if ($asArray) {
            $content = (file_exists($name))
                ? json_decode(file_get_contents($name), true) : array();
        } else {
            $content = (file_exists($name))
                ? json_decode(file_get_contents($name)) : new stdClass();
        }

        return $content;
    }

    /**
     * @param string $name
     * @param mixed $content
     * @return int|bool
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-22
     */
    public function setContent($name, $content)
    {
        return file_put_contents($name, json_encode($content));
    }
}