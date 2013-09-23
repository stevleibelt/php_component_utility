<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class BuilderInterface
 * Take a look to: https://en.wikipedia.org/wiki/Builder_pattern
 * Add fluent interface setter methods.
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface BuilderInterface
{
    /**
     * Should be the final method called after you have called all needed setter
     *  methods.
     *
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function andFinallyGetResult();
}