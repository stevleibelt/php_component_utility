<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class ParameterInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface ParameterInterface extends NameableInterface
{
    /**
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function getValue();

    /**
     * @param mixed $value
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function setValue($value);
}