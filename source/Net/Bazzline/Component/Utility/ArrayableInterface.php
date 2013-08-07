<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-07 
 */

namespace Net\Bazzline\Component\Utility;

use Iterator;
use ArrayAccess;

/**
 * Class ArrayableInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-07
 */
interface ArrayableInterface extends ArrayAccess, Iterator
{
    /**
     * @param array $array
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-07
     */
    public function fromArray(array $array);

    /**
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-07
     */
    public function toArray();
}