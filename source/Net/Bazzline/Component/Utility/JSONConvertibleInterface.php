<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-09-23
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class JSONConvertibleInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-09-23
 */
interface JSONConvertibleInterface 
{
    /**
     * @param string $json
     * @return $this
     * @throws \InvalidArgumentException
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-34
     */
    public function fromJSON($json);

    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-09-34
     */
    public function toJSON();
}