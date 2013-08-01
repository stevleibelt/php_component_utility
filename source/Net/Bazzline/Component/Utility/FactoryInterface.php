<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01 
 */

namespace Net\Bazzline\Component\Utility;

/**
 * Class FactoryInterface
 *
 * @package Net\Bazzline\Component\Utility
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-08-01
 */
interface FactoryInterface
{
    /**
     * @return mixed
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-08-01
     */
    public function create();
}